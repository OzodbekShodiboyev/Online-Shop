<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TopEsExpress</title>
    <link href="./favicon.ico" rel="icon">
</head>

<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="#footer">About</a>
                <a class="text-body mr-3" href="#footer">Contact</a>
                <a class="text-body mr-3" href="#footer">Help</a>
            </div>
           
        </div>
        <div class="col-md-5 text-center d-none d-lg-block align-items-center">
             <center>
                <b class="text-success">@lang('public.dastafka_info')</b>
            </center>
        </div>
        <div class="col-lg-4 text-center text-lg-right" style="display: flex; justify-content: flex-end;">
            <div class="d-inline-flex align-items-center">
                @auth
                    @if(Auth::user()->role_as == 1)
                         <a href="{{ url('admin/dashboard')}}" type="button" class="btn btn-sm btn-light mx-2">Admin Panel</a>
                    @endif
                @endauth
                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                        data-toggle="dropdown">UZS</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">UZS</button>
                    </div>
                </div>
                
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                        data-toggle="dropdown">{{ strtoupper(Session::get('locale', 'uz')) }}</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ url('locale/uz') }}" type="button">🇺🇿 Uzbek</a>
                        <a class="dropdown-item" href="{{ url('locale/ru') }}" type="button">🇷🇺 Russian</a>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <div class="row align-items-center bg-dark py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="{{ url('/') }}" class="text-decoration-none bg p-0 m-0">
                <!-- <img src="./globus-removebg-preview.png" alt="" class="bg-dark m-0 p-0" height="35" style="width: 125px"> -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" style="width: 125px;" viewBox="0 0 399 126" enable-background="new 0 0 399 126" xml:space="preserve">
                    <path fill="#F58808" opacity="1.000000" stroke="none" d=" M337.531342,1.000000   C338.000000,7.487188 338.000000,13.974376 338.000000,21.124886   C326.130127,21.124886 314.936646,21.124886 303.456726,21.124886   C303.456726,26.206360 303.456726,30.629683 303.456726,35.755806   C313.579254,35.755806 323.775299,35.755806 334.170074,35.755806   C334.170074,42.384987 334.170074,48.316284 334.170074,54.760201   C323.929108,54.760201 313.849701,54.760201 303.467651,54.760201   C303.467651,59.999756 303.467651,64.732254 303.467651,70.081245   C314.893280,70.081245 326.266541,70.081245 337.878540,70.081245   C337.878540,76.784599 337.878540,82.878731 337.878540,89.268951   C319.728333,89.268951 301.680664,89.268951 283.421021,89.268951   C283.311005,88.007385 283.154602,87.047600 283.154144,86.087730   C283.141083,59.123344 283.137878,32.158943 283.164429,5.194577   C283.165527,4.055942 283.467590,2.917600 283.314728,1.389560   C301.020905,1.000000 319.041779,1.000000 337.531342,1.000000  z"/>
                    <path fill="#FBFBFB" opacity="1.000000" stroke="none" d=" M133.531342,1.000000   C134.000000,7.618178 134.000000,14.236356 134.000000,21.235722   C126.614204,21.235722 119.521828,21.235722 112.000336,21.235722   C112.000336,44.028515 112.000336,66.441544 112.000336,89.181557   C105.150139,89.181557 98.734093,89.181557 91.854073,89.181557   C91.854073,66.702812 91.854073,44.293480 91.854073,21.386211   C84.166992,21.386211 76.921677,21.386211 68.890526,21.386211   C69.199379,14.479010 69.485229,8.086106 69.385544,1.346601   C90.354225,1.000000 111.708458,1.000000 133.531342,1.000000  z"/>
                    <path fill="#EE8408" opacity="1.000000" stroke="none" d=" M282.375000,127.000000   C282.000000,117.113014 282.000000,107.226028 282.000000,98.374336   C285.783783,97.715584 289.019623,97.013458 292.292419,96.614815   C297.253235,96.010567 301.108246,98.092148 303.608795,102.288948   C305.782654,105.937454 305.339874,109.688393 302.703766,112.991119   C299.451843,117.065376 295.113678,118.154877 290.178467,116.886322   C288.770416,116.524399 287.472565,115.733658 285.713959,114.958817   C285.330505,118.816948 284.967041,122.473763 284.801819,126.565292   C284.250000,127.000000 283.500000,127.000000 282.375000,127.000000  M296.447998,114.049347   C301.738556,110.517380 302.905853,105.463455 299.180847,101.762650   C296.220459,98.821541 292.766235,98.347763 289.240906,100.621429   C286.219269,102.570251 284.368744,105.363365 285.832977,109.053329   C287.580841,113.458061 290.919189,115.389015 296.447998,114.049347  z"/>
                    <path fill="#FDFDFD" opacity="1.000000" stroke="none" d=" M212.083099,114.476074   C209.470749,114.476051 207.334396,114.476051 205.014160,114.476051   C205.014160,85.251953 205.014160,56.480267 205.014160,27.365303   C210.824631,27.365303 216.742264,27.365303 223.020905,27.365303   C223.264008,28.604290 223.564499,30.135656 223.878342,31.735167   C238.604050,22.055792 253.327042,23.485914 263.760895,35.492157   C274.743744,48.130135 274.643402,68.177788 263.921295,80.962601   C255.802017,90.643799 239.293518,96.303970 223.728653,84.770355   C223.728653,94.618950 223.728653,104.150223 223.728653,114.476097   C219.715714,114.476097 216.137390,114.476097 212.083099,114.476074  M245.209930,72.018906   C252.821686,67.233994 255.424713,58.787922 251.698395,50.965752   C248.566559,44.391499 240.474808,41.353539 232.987183,43.940826   C225.639465,46.479767 222.080933,53.875927 223.987946,62.645172   C225.876022,71.327324 234.205612,75.248444 245.209930,72.018906  z"/>
                    <path fill="#F68908" opacity="1.000000" stroke="none" d=" M389.963684,41.991589   C386.580750,43.784374 383.534088,45.428455 381.971222,46.271824   C377.537628,44.497429 374.403168,42.874828 371.071655,42.106129   C369.880096,41.831200 368.212189,43.620632 366.761719,44.467823   C367.785736,45.763683 368.552032,47.713665 369.880402,48.237003   C374.505707,50.059265 379.383331,51.229355 384.059143,52.937359   C392.890625,56.163364 397.023010,61.812611 397.122040,70.351089   C397.226990,79.400604 393.299042,85.229713 384.669434,88.830872   C370.361633,94.801521 352.746582,90.327141 345.777649,78.935478   C345.354645,78.244041 345.076630,77.463921 344.537201,76.310280   C349.791351,73.304878 354.939606,70.360039 360.386932,67.244133   C363.113525,73.244072 367.730896,75.233658 373.582275,74.120941   C375.123077,73.827942 376.428284,72.296013 377.841675,71.333031   C376.761261,70.053543 375.927521,68.155579 374.555115,67.608276   C370.091980,65.828407 365.376831,64.692604 360.859070,63.035229   C351.630890,59.649815 347.092651,53.717686 347.157654,45.497898   C347.228729,36.512390 352.341736,29.960423 361.712189,26.847292   C375.057434,22.413622 388.926880,27.140884 395.846680,38.670555   C393.995605,39.729240 392.147766,40.786060 389.963684,41.991589  z"/>
                    <path fill="#F38708" opacity="1.000000" stroke="none" d=" M44.999947,44.148865   C51.996876,44.149418 58.495155,44.068779 64.990364,44.175438   C70.455154,44.265179 72.836205,46.874966 72.729996,52.314167   C72.629562,57.457863 70.274269,59.898258 64.983437,59.915356   C46.992062,59.973499 29.000271,59.973812 11.008904,59.915157   C5.716335,59.897903 3.367453,57.458481 3.270004,52.307575   C3.167100,46.868355 5.547401,44.225319 11.015964,44.178757   C22.176573,44.083717 33.338551,44.149376 44.999947,44.148865  z"/>
                    <path fill="#EDEDED" opacity="1.000000" stroke="none" d=" M136.980972,71.185608   C129.029404,66.680168 129.961014,59.209846 131.366119,52.224010   C135.095078,33.684734 155.182526,23.162092 172.770569,30.130186   C178.216980,32.287964 180.793701,35.528061 181.812378,41.494125   C179.806946,42.108704 177.801025,42.728355 175.992233,43.287109   C175.326645,47.054874 180.329041,50.766094 175.536377,54.345596   C174.558380,50.806286 173.648102,47.512047 172.726471,44.176727   C169.199371,44.557606 166.090668,44.893299 162.551971,45.275429   C162.551971,48.426067 162.743881,51.543026 162.466568,54.617664   C162.338455,56.038139 161.294128,57.375980 159.938171,59.025024   C155.326263,59.702984 151.441406,60.107197 147.956848,60.469761   C147.444427,62.419033 146.963287,64.249268 146.482147,66.079498   C146.049866,65.976288 145.617584,65.873070 145.185303,65.769859   C144.721939,63.908974 144.258560,62.048084 143.855087,60.427696   C140.920822,60.427696 138.367874,60.427696 135.454117,60.427696   C135.836746,62.576679 136.200485,64.336090 136.451508,66.111450   C136.689438,67.794144 136.809235,69.493553 136.980972,71.185608  M159.867065,49.638905   C159.867065,48.192673 159.867065,46.746437 159.867065,45.231697   C156.350754,44.791771 153.285889,44.408321 149.523727,43.937637   C148.663910,48.361496 147.845184,52.573914 146.955795,57.149895   C151.650360,57.149895 155.531311,57.149895 159.867126,57.149895   C159.867126,54.802967 159.867126,52.694187 159.867065,49.638905  M143.190506,57.320564   C144.483521,52.693340 145.776520,48.066116 147.457596,42.050098   C144.444489,42.685196 141.275223,42.446320 140.526169,43.678596   C138.136765,47.609413 136.646561,52.086819 134.363297,57.388096   C138.048508,57.388096 140.152283,57.388096 143.190506,57.320564  M162.366348,39.356812   C164.184494,45.164494 167.853409,40.789139 170.606049,41.455135   C170.822144,41.084942 171.038254,40.714745 171.254349,40.344547   C168.739914,37.705582 166.225494,35.066616 163.711060,32.427650   C163.262451,32.695526 162.813858,32.963402 162.365250,33.231277   C162.365250,34.982899 162.365250,36.734524 162.366348,39.356812  M154.874115,41.918030   C156.448853,41.918030 158.023590,41.918030 159.501678,41.918030   C159.501678,38.751694 159.501678,35.932968 159.501678,33.114243   C159.051041,32.847736 158.600388,32.581226 158.149750,32.314720   C156.091858,34.837605 154.010864,37.343323 152.071442,39.954216   C152.003052,40.046291 153.340179,41.182419 154.874115,41.918030  z"/>
                    <path fill="#F38708" opacity="1.000000" stroke="none" d=" M51.438889,62.816597   C56.497383,65.079910 58.049789,68.289261 56.778267,73.333214   C55.742798,77.440773 52.699738,78.599991 48.830566,78.587502   C36.874374,78.548882 24.917608,78.628265 12.961811,78.549156   C6.860759,78.508797 4.812945,76.361740 4.831846,70.483551   C4.850833,64.578423 6.756194,62.734310 13.138396,62.721439   C25.758459,62.695980 38.378670,62.744614 51.438889,62.816597  z"/>
                    <path fill="#F38708" opacity="1.000000" stroke="none" d=" M24.924253,33.105881   C25.041048,27.898846 27.653278,25.893372 32.269920,25.909029   C44.410328,25.950199 56.551319,25.869976 68.691338,25.950243   C73.802086,25.984034 75.900795,28.217768 76.006798,33.260422   C76.122566,38.767796 74.122871,41.430569 69.035011,41.502121   C56.730648,41.675175 44.421124,41.661793 32.116047,41.519295   C26.878729,41.458641 25.244886,39.397106 24.924253,33.105881  z"/>
                    <path fill="#EFEFEF" opacity="1.000000" stroke="none" d=" M162.064667,75.983391   C163.255676,75.057251 164.359512,73.537224 165.658508,73.346535   C167.527588,73.072144 169.538651,73.764801 172.332870,74.165802   C173.470367,69.743393 174.587494,65.400162 175.872910,60.402664   C172.206207,60.218693 169.339554,60.074863 166.472916,59.931034   C166.424927,59.489201 166.376938,59.047367 166.328949,58.605534   C172.755798,55.805462 179.790848,57.652092 186.794556,57.320377   C186.906403,55.414825 187.009109,53.664848 187.041534,51.458076   C186.971237,51.001278 186.989029,51.063362 187.450272,51.040123   C187.944641,50.316399 187.977768,49.615921 187.957977,48.944843   C187.905045,48.974247 187.804794,49.042145 187.804794,49.042145   C191.264572,49.311642 191.636902,51.951614 191.885086,54.537693   C193.099167,67.188431 188.810394,77.572426 178.083755,84.492470   C167.405167,91.381508 156.202759,91.262230 145.150711,84.881714   C143.910477,84.165718 142.718674,83.365837 141.061127,82.327042   C145.497528,81.973030 149.574234,81.647728 154.693130,81.239265   C155.296829,81.803436 156.929428,83.329155 159.152512,85.406700   C159.922546,83.059509 160.460510,81.419731 161.412720,79.370827   C162.156235,80.831894 162.485489,82.702087 163.129547,86.360260   C166.221405,82.846512 168.428894,80.337807 171.586807,76.748993   C167.470596,76.418037 164.767624,76.200714 162.064667,75.983391  M178.588593,61.041580   C177.615509,65.628105 176.642426,70.214630 175.659729,74.846474   C178.755463,77.251289 181.343811,76.614342 182.980164,73.017776   C184.776688,69.069183 186.305939,64.998993 188.211960,60.346420   C184.313553,60.346420 181.717285,60.346420 178.588593,61.041580  z"/>
                    <path fill="#F7F7F7" opacity="1.000000" stroke="none" d=" M161.153397,60.071175   C162.066940,59.854790 162.980484,59.638409 164.318085,59.321583   C163.020691,64.658890 161.790085,69.721497 160.781555,75.175804   C161.003632,75.567497 160.932327,75.492203 160.932327,75.492203   C160.268173,76.735748 159.604004,77.979286 159.369415,78.418533   C156.139084,78.718567 153.350266,78.555443 150.822403,79.290169   C142.670547,81.659538 136.901672,79.376068 133.458694,71.524734   C134.672501,71.997368 135.466141,72.306396 136.861267,72.865143   C140.693909,74.426659 143.812500,74.901665 146.795944,71.817444   C145.773270,70.927353 144.896545,70.164307 143.769135,69.183060   C149.815765,66.013748 155.484589,63.042461 161.153397,60.071175  z"/>
                    <path fill="#EA8208" opacity="1.000000" stroke="none" d=" M348.483826,104.674194   C349.137482,107.678520 347.687714,108.125153 345.492401,108.090607   C340.383240,108.010185 335.272003,108.064972 329.452545,108.064972   C333.373169,118.275238 340.800262,113.138435 347.677429,112.044815   C343.191559,117.359962 337.237091,118.649094 332.224884,116.244370   C327.736908,114.091171 325.353973,109.923286 326.025848,105.401817   C326.702026,100.851562 330.914734,97.138283 336.104858,96.517776   C341.809265,95.835785 346.039001,98.517403 348.483826,104.674194  M339.750488,99.554718   C333.942261,98.882080 331.585358,100.209648 330.080170,105.167305   C335.054688,105.167305 339.962158,105.167305 344.869659,105.167305   C345.049042,104.804146 345.228394,104.440979 345.407776,104.077820   C343.763977,102.658531 342.120178,101.239243 339.750488,99.554718  z"/>
                    <path fill="#EA8208" opacity="1.000000" stroke="none" d=" M241.873932,117.415779   C240.016724,117.219421 238.475662,117.195724 237.077728,116.736435   C231.638306,114.949303 228.588333,109.347771 230.064346,104.100731   C231.476654,99.080139 237.387421,95.730278 243.195053,96.659035   C249.388672,97.649529 252.398788,101.455788 251.809525,108.027008   C245.787521,108.027008 239.716385,108.027008 233.166779,108.027008   C234.444565,112.685913 237.399780,114.667702 241.284348,114.471268   C244.365067,114.315491 247.386017,112.978180 250.433517,112.165489   C250.632431,112.846466 250.831360,113.527435 251.030289,114.208412   C248.105469,115.268387 245.180664,116.328362 241.873932,117.415779  M245.812698,105.636215   C246.737000,105.519302 247.661285,105.402390 248.958313,105.238335   C247.572800,100.975609 244.809052,99.094063 241.018082,99.227760   C237.374939,99.356255 234.429230,100.988731 233.216599,105.636467   C237.424362,105.636467 241.194199,105.636467 245.812698,105.636215  z"/>
                    <path fill="#E58008" opacity="1.000000" stroke="none" d=" M364.166962,96.847672   C365.823944,97.537193 367.095551,98.156136 368.367157,98.775070   C368.294312,99.257378 368.221497,99.739677 368.148651,100.221985   C367.015442,100.221985 365.876556,100.293976 364.750336,100.205406   C362.987732,100.066795 361.203339,99.544495 359.488770,99.733765   C358.623810,99.829262 357.352722,101.069946 357.258606,101.904800   C357.172455,102.669106 358.252075,103.971634 359.119202,104.354034   C361.069550,105.214134 363.523499,105.204102 365.182190,106.380486   C366.991730,107.663826 369.338287,109.955879 369.239288,111.681313   C369.134491,113.507645 366.738617,116.039513 364.791199,116.750458   C360.618469,118.273788 356.359375,117.703445 352.128357,113.456070   C353.846527,113.074791 354.919189,112.512939 355.826752,112.710266   C357.233948,113.016235 358.608643,114.462936 359.852966,114.303215   C361.909637,114.039261 363.851440,112.880569 365.841644,112.098923   C364.442993,110.781448 363.048035,109.459991 361.638184,108.154587   C361.533264,108.057449 361.316010,108.091881 361.160492,108.037735   C357.704773,106.834450 353.026733,106.782227 353.583496,101.332314   C353.943085,97.812691 358.063965,96.149231 364.166962,96.847672  z"/>
                    <path fill="#E88108" opacity="1.000000" stroke="none" d=" M260.562317,102.525688   C259.101532,100.717796 257.886261,99.200584 256.421295,97.371674   C262.338745,95.914734 262.676117,102.003296 266.019989,103.304291   C268.910431,100.929802 271.777069,98.574860 274.643677,96.219925   C275.036804,96.678459 275.429901,97.137001 275.823029,97.595543   C273.456055,100.531387 271.089081,103.467239 268.588013,106.569450   C271.338654,109.907166 273.957062,113.084389 276.672028,116.378799   C273.450897,116.863800 273.450897,116.863800 266.475037,109.635300   C262.379486,111.010910 262.016785,117.786430 255.523911,116.830261   C258.390564,113.246109 260.933868,110.066284 263.685181,106.626320   C262.725830,105.356018 261.766815,104.086197 260.562317,102.525688  z"/>
                    <path fill="#E68008" opacity="1.000000" stroke="none" d=" M376.973450,106.209671   C373.376709,102.027367 374.108002,98.148720 378.887054,97.150848   C382.131561,96.473396 385.700409,97.349388 389.124207,97.530663   C389.180450,98.283905 389.236694,99.037140 389.292938,99.790382   C388.211426,99.979546 387.111786,100.391769 386.052582,100.305901   C384.440094,100.175186 382.782745,99.261322 381.282532,99.510712   C380.111176,99.705452 379.149750,101.162895 378.095001,102.059219   C378.960205,102.946106 379.673340,104.168671 380.724579,104.644943   C382.513306,105.455376 384.805542,105.376640 386.349396,106.446320   C388.075806,107.642525 390.442474,109.830009 390.283936,111.352165   C390.080444,113.306328 387.990509,115.913780 386.089813,116.667503   C381.922974,118.319901 377.618561,117.720947 373.185669,113.685272   C374.890259,113.260231 375.960175,112.731232 376.977386,112.818199   C377.881104,112.895462 378.789856,114.132088 379.585632,114.026009   C382.011902,113.702568 385.918549,113.619904 386.477844,112.283646   C387.900726,108.884148 384.105530,108.875061 381.973145,108.022079   C380.442230,107.409691 378.855255,106.937332 376.973450,106.209671  z"/>
                    <path fill="#F08608" opacity="1.000000" stroke="none" d=" M322.262360,99.306465   C315.494812,100.666832 314.588806,102.127655 314.132324,108.788345   C313.948029,111.478050 316.470551,115.049614 312.352844,116.950935   C311.878998,114.248924 311.166290,111.562279 310.991241,108.841042   C310.768036,105.371490 310.972717,101.873894 311.015015,98.388657   C311.018799,98.074371 311.183838,97.762032 311.154846,97.862701   C314.490356,97.412354 317.616608,96.849052 320.763031,96.693787   C321.338867,96.665367 321.996643,98.297318 322.262360,99.306465  z"/>
                    <path fill="#ECECEC" opacity="1.000000" stroke="none" d=" M187.002975,50.996216   C184.825211,51.718117 182.615707,52.445084 181.230988,52.900681   C182.058365,47.093674 182.879456,41.330715 183.639130,35.998867   C188.342163,38.192932 190.782211,43.603786 187.984589,48.741295   C187.804794,49.042145 187.905045,48.974247 187.618622,49.120247   C187.217804,49.865288 187.103424,50.464325 186.989029,51.063362   C186.989029,51.063362 186.971237,51.001278 187.002975,50.996216  z"/>
                    <path fill="#030201" opacity="1.000000" stroke="none" d=" M187.450272,51.040123   C187.103424,50.464325 187.217804,49.865288 187.671539,49.090843   C187.977768,49.615921 187.944641,50.316399 187.450272,51.040123  z"/>
                </svg>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="{{ url('search') }}" method="GET" role="search">
                <div class="input-group">
                    <input type="search" name="search" class="form-control bg-dark border-success" value="{{ Request::get('search') }}"
                        placeholder="@lang('public.search')" style="color: #EBEBEB;">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text bg-dark text-success border-success">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right text-white">
            <p class="m-0 text-white">Telephone Number:</p>
            <h5 class="m-0 text-white">{{ $appSetting->phone1 ?? '' }}</h5>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-success w-100" data-toggle="collapse"
                href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i> @lang('public.all_category') </h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <a href="{{ url('/collections') }}" class="nav-item nav-link">@lang('public.all_category')</a>
                    @foreach ($categories as $category)
                        <a href="{{ url('collections/' . $category->slug) }}"
                            class="nav-item nav-link">{{ $category->name }}</a>
                    @endforeach
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="{{ url('/') }} " class="text-decoration-none d-block d-lg-none">
                    <img src="{{asset('globus-removebg-preview.png')}}" alt="" class="bg-dark m-0 p-0" height="35">
                </a>
                <button type="button" class="navbar-toggler bg-success" data-toggle="collapse"
                    data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link active text-white">@lang('public.main')</a>
                        <a href="{{ url('/new-arrivals') }}" class="nav-item nav-link text-white">@lang('public.new_product')</a>
                        <a class="nav-item nav-link text-white" href="{{ url('wishlist') }}">@lang('public.sorted')</a>
                        <a class="nav-item nav-link text-white" href="{{ url('orders') }}">@lang('public.my_buy')</a>
                    </div>
                    
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        
                        <a href="{{ url('wishlist') }}" class="login-link text-light text-decoration-none mr-1">
                            <button type="button" class="btn position-relative">
                                <i class="fa-solid fa-heart text-white fa-lg"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 "
                                    style="margin-left: -15%">
                                    <livewire:frontend.wishlist-count />
                                </span>
                            </button>
                        </a>
                        <a href="{{ url('cart') }}" class="login-link text-light text-decoration-none mr-4">
                            <button type="button" class="btn position-relative">
                                <i class="fa-solid fa-cart-shopping text-white fa-lg"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 "
                                    style="margin-left: -15%">
                                    <livewire:frontend.cart.cart-count />
                                </span>
                            </button>
                        </a>
                        
                        @if (Route::has('login'))
                            @auth
                                <a class="login-link text-light text-decoration-none mr-4" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-lg fa-fw text-gray-400"></i>{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="route('logout')"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            <i class="fas fa-sign-out-alt fa-lg fa-fw mr-2 text-gray-400"></i>
                                            {{ __('Chiqish') }}
                                        </a>
                                    </form>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="login-link text-light text-decoration-none">
                                    <i class="fa-solid fa-user"></i>
                                    @lang('public.login')
                                </a>
                            @endauth
                        @endif
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->

<div class=" align-items-center d-block d-lg-none mt-2">
    <div class="col-lg-4 col-12 text-left">
        <form action="{{ url('search') }}" method="GET" role="search">
            <div class="input-group">
                <input type="search" name="search" class="form-control" value="{{ Request::get('search') }}"
                    placeholder="@lang('public.search')">
                <div class="input-group-append">
                    <button type="submit" class="input-group-text bg-transparent text-success">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <br>
</div>



<div class="header_navbar_collapse off-nav" style="display: block;">
    <ul class="header_navbar_collapse_nav mt-2" style="min-height: 40px;">
        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link active text-dark" href="{{ url('/') }}">
                    <span class="fas fa-home fa-lg"></span>
                </a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link text-dark" href="{{ url('/collections') }}">
                    <span class="fas fa-solid fa-list-ul fa-lg" style="font-size: 22px;"></span>
                </a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link text-dark btn position-relative"
                    href="{{ url('wishlist') }}">
                    <span class="fas fa-solid fa-heart fa-lg" aria-hidden="true"></span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 "
                        style="margin-left: -15%">
                        <livewire:frontend.wishlist-count />
                    </span>
                </a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link text-dark btn position-relative"
                    href="{{ url('cart') }}">
                    <span class="fas fa-shopping-cart fa-lg" aria-hidden="true"></span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 "
                        style="margin-left: -15%">
                        <livewire:frontend.cart.cart-count />
                    </span>
                </a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad ">
                @if (Route::has('login'))
                    @auth
                        <a class="header_navbar_collapse_nav_item_link" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="position-relative d-flex justify-content-center icon-notifications">
                                <span class="fas fa-user fa-lg text-dark"></span>
                            </span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" style="margin-top: -26%"
                            aria-labelledby="userDropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Chiqish') }}
                                </a>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="header_navbar_collapse_nav_item_link ">
                            <span class="position-relative d-flex justify-content-center icon-notifications">
                                <span class="fas fa-user fa-lg text-dark"></span>
                            </span>
                        </a>
                    @endauth
                @endif
            </div>
        </li>
    </ul>
</div>
</nav>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
