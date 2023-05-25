<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Dompdf\Dompdf;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        $orders = Order::when($request->date != null, function ($q) use ($request) {

            return $q->whereDate('created_at', $request->date);
        }, function ($q) use ($todayDate) {

            return $q->whereDate('created_at', $todayDate);
        })
            ->when($request->status != null, function ($q) use ($request) {

                return $q->where('status_message', $request->status);
            })

            ->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }
    public function show(int $orderId)
    {
        $order = Order::where('id', $orderId)->first();
        if ($order) {
            return view('admin.orders.view', compact('order'));
        } else {
            return redirect('admin/orders')->with('message', 'Order Id not found');
        }
    }
    public function updateOrderStatus(int $orderId, Request $request)
    {
        $order = Order::where('id', $orderId)->first();
        if ($order) {

            $order->update([
                'status_message' => $request->order_status
            ]);
            return redirect('admin/orders/' . $orderId)->with('message', 'Order Status Updated');
        } else {
            return redirect('admin/orders/' . $orderId)->with('message', 'Order Id not found');
        }
    }

    public function viewInvoice(int $orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('admin.invoice.generate-invoice', compact('order'));
    }

    public function generateInvoice(int $orderId)
    {
        $order = Order::findOrFail($orderId);

        $todayDate = Carbon::now()->format('d-m-Y');

        $filename = 'invoice-' . $order->id . '-' . $todayDate . '.pdf';

        $dompdf = new Dompdf();

        $html = view('admin.invoice.generate-invoice', compact('order'))->render();

        // Load the HTML content into Dompdf
        $dompdf->loadHtml($html);

        // Set the paper size and rendering options
        $customPaper = array(0,0,360,650);
        $dompdf->setPaper($customPaper);

        // Render the PDF
        $dompdf->render();

        // Stream the PDF to the browser for download
        $dompdf->stream($filename, ['Attachment' => true]);
    }
}
