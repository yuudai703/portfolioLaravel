@extends("layout.app2")
@section("content")
<script src="https://cdn.jsdelivr.net/gh/creativetimofficial/david-ai@1.0.6/packages/dist/david-ai.min.js"></script>

    {{-- <div class="h-[300px]">&nbsp;</div> --}}

    <!-- Minified UMD bundle -->



    <style>
        .sample {
            -ms-overflow-style: none; /* IE, Edge 対応 */
            scrollbar-width: none;    /* Firefox 対応 */
        }

        .smaple::-webkit-scrollbar {
            display: none; /* Chrome, Safari 対応 */
        }
        
    </style>

    <div class="grid grid-cols-12 gap-1">
    

        <div style="position: relative;" class="col-span-4 mt-[10vh] h-[83vh] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
            <img class="index-3" id="myPro" style='z-index:3; top:20px; left:80px; border-radius:150px; position: absolute; width: 120px; height: 120px;' src="{{asset('pro2.jpg')}}" alt="logo" />
            <div class="index-2 bg-[#BE8871]/60" style='z-index:2; top:20px; left:95px; border-radius:150px; position: absolute; width: 120px; height: 120px; '>
            </div>

            <h5 class="text-xl mt-32 mb-1 font-bold leading-none tracking-tight text-stone-600" style="">Web Engineer / Developer</h5>
            <div class="text-stone-600 mt-3">
            <div nowrap class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-person-arms-up" viewBox="0 0 16 16">
                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.5 1.5 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.7.7 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.7.7 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z"/>
                </svg>
                <p class="openAni text-xs">&nbsp;&nbsp;新井 勇大　Yudai Arai</p>
            </div>
            <div nowrap class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-cake2" viewBox="0 0 16 16">
                    <path d="m3.494.013-.595.79A.747.747 0 0 0 3 1.814v2.683q-.224.051-.432.107c-.702.187-1.305.418-1.745.696C.408 5.56 0 5.954 0 6.5v7c0 .546.408.94.823 1.201.44.278 1.043.51 1.745.696C3.978 15.773 5.898 16 8 16s4.022-.227 5.432-.603c.701-.187 1.305-.418 1.745-.696.415-.261.823-.655.823-1.201v-7c0-.546-.408-.94-.823-1.201-.44-.278-1.043-.51-1.745-.696A12 12 0 0 0 13 4.496v-2.69a.747.747 0 0 0 .092-1.004l-.598-.79-.595.792A.747.747 0 0 0 12 1.813V4.3a22 22 0 0 0-2-.23V1.806a.747.747 0 0 0 .092-1.004l-.598-.79-.595.792A.747.747 0 0 0 9 1.813v2.204a29 29 0 0 0-2 0V1.806A.747.747 0 0 0 7.092.802l-.598-.79-.595.792A.747.747 0 0 0 6 1.813V4.07c-.71.05-1.383.129-2 .23V1.806A.747.747 0 0 0 4.092.802zm-.668 5.556L3 5.524v.967q.468.111 1 .201V5.315a21 21 0 0 1 2-.242v1.855q.488.036 1 .054V5.018a28 28 0 0 1 2 0v1.964q.512-.018 1-.054V5.073c.72.054 1.393.137 2 .242v1.377q.532-.09 1-.201v-.967l.175.045c.655.175 1.15.374 1.469.575.344.217.356.35.356.356s-.012.139-.356.356c-.319.2-.814.4-1.47.575C11.87 7.78 10.041 8 8 8c-2.04 0-3.87-.221-5.174-.569-.656-.175-1.151-.374-1.47-.575C1.012 6.639 1 6.506 1 6.5s.012-.139.356-.356c.319-.2.814-.4 1.47-.575M15 7.806v1.027l-.68.907a.94.94 0 0 1-1.17.276 1.94 1.94 0 0 0-2.236.363l-.348.348a1 1 0 0 1-1.307.092l-.06-.044a2 2 0 0 0-2.399 0l-.06.044a1 1 0 0 1-1.306-.092l-.35-.35a1.935 1.935 0 0 0-2.233-.362.935.935 0 0 1-1.168-.277L1 8.82V7.806c.42.232.956.428 1.568.591C3.978 8.773 5.898 9 8 9s4.022-.227 5.432-.603c.612-.163 1.149-.36 1.568-.591m0 2.679V13.5c0 .006-.012.139-.356.355-.319.202-.814.401-1.47.576C11.87 14.78 10.041 15 8 15c-2.04 0-3.87-.221-5.174-.569-.656-.175-1.151-.374-1.47-.575-.344-.217-.356-.35-.356-.356v-3.02a1.935 1.935 0 0 0 2.298.43.935.935 0 0 1 1.08.175l.348.349a2 2 0 0 0 2.615.185l.059-.044a1 1 0 0 1 1.2 0l.06.044a2 2 0 0 0 2.613-.185l.348-.348a.94.94 0 0 1 1.082-.175c.781.39 1.718.208 2.297-.426"/>
                </svg>
                <p class="openAni text-xs">&nbsp;&nbsp;born 1997</p>
            </div>
            <div nowrap class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-globe-asia-australia-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0m3.041 9a1 1 0 0 0-.946.674l-.172.499a1 1 0 0 1-.403.515l-.803.517a1 1 0 0 0-.458.84v.455a1 1 0 0 0 1 1h.257c.192 0 .38.055.542.16l.762.491a1 1 0 0 0 .282.123A7 7 0 0 0 14.82 9.57a1 1 0 0 0-.085-.061l-.315-.204a1 1 0 0 0-.977-.06l-.169.082a1 1 0 0 1-.742.051l-1.02-.33A1 1 0 0 0 11.205 9zm-5.832 2.655a.302.302 0 1 0-.298.52l.762.325.48.232A.386.386 0 1 0 6.321 12h-.417a.7.7 0 0 1-.418-.139zM8 1a7 7 0 0 0-6.387 9.864l.754-1.285a1 1 0 0 1 1.546-.225l1.074 1.005a.986.986 0 0 0 1.36-.011l.038-.037a.88.88 0 0 0 .26-.754c-.075-.549.37-1.035.92-1.1.728-.086 1.587-.324 1.728-.957.086-.386-.115-.83-.361-1.2-.208-.312 0-.8.374-.8.122 0 .24-.055.318-.15l.393-.474c.196-.237.49-.368.797-.403.554-.065 1.407-.277 1.582-.973.185-.731-.986-.944-.998-1.62A7 7 0 0 0 8 1m.524 8.963a.413.413 0 1 0-.783-.183v.028a.46.46 0 0 1-.137.326l-.113.107a.36.36 0 0 0 .5.518l.193-.187a.6.6 0 0 0 .12-.166zm3.374-4.444c-.252-.244-.681-.139-.931.107-.256.251-.578.406-.918.585-.338.177-.264.625.101.735a.48.48 0 0 0 .345-.027l1.278-.617a.484.484 0 0 0 .125-.783"/>
                </svg>
                <p class="openAni text-xs ">&nbsp;&nbsp;Birthplace Nagano prefectur</p>
            </div>
            <p class="openAni text-xs mt-2">システムを利用する側から、テスト・保守運用、そして開発まで、</p>
            <p class="openAni text-xs">システム開発の各工程を経験しながら、段階的にエンジニアとしてのスキルを身につけてまいりました。</p>
            <p class="openAni text-xs">現在は Laravel / PHP / MySQL</p>
            <p class="openAni text-xs">を中心に、業務システムのWebアプリケーション開発に携わっています。</p>
            </div>



            
        </div>

        <div class="col-span-1">
        </div>
        <div class="col-span-7">
            <div class="relative tab-group mt-[10vh] w-full h-[83vh] max-h-[83vh]">
                <div class="-top-[50px] flex w-full  bg-[#186A70]/30 p-0.5 absolute rounded-lg" role="tablist">
                    <div class="absolute top-1 left-0.5 h-8 bg-[#3B8B8E]/50 rounded-md shadow-sm transition-all duration-300 transform scale-x-0 translate-x-0 tab-indicator z-0"></div>

                    <a href="#" class="tab-link text-center w-[25%] text-sm active inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab1-group">
                    <span class="openAni">SKILLS</span>
                    </a>
                    <a href="#" onclick="openAni3()" class="tab-link text-center w-[25%] text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab2-group">
                    <span class="openAni">RESUME / CV</span>
                    </a>
                    <a href="#" onclick="openAni4()" class="tab-link text-center w-[25%] text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab3-group">
                    <span class="openAni">PROTOTYPES</span>
                    </a>
                    <a href="#" class="tab-link text-center w-[25%] text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab4-group">
                    <span class="openAni">CONTACT</span>
                    </a>
                    {{-- <a href="#" class="tab-link text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab5-group">
                    
                    </a> --}}
                </div>
                <div class="mt-4 tab-content-container ">
                    <div id="tab1-group" class="tab-content text-stone-500 text-sm block">
                    <!-- {{-- <p>Content for HTML.</p> --}} -->
                        <div style="position: relative;" class="mt-[50px] w-full h-[83vh] bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            <div style="overflow-x: hidden;" class="w-full sample overflow-scroll rounded-lg border border-[#BE8871] h-full">
                                <table class="w-full">
                                    <thead class="border-b  border-[#BE8871]  text-sm font-medium text-stone-600 dark:bg-surface-dark">
                                    <tr>
                                        <th style="z-index:10;" class="openAni px-2.5 sticky top-0 py-1 bg-[#BE8871] text-start font-medium">type</th>
                                        <th style="z-index:10;" class="openAni px-2.5 sticky top-0 py-1 bg-[#BE8871] text-start font-medium">name</th>
                                        <th style="z-index:10;" class="openAni px-2.5 sticky top-0 py-1 bg-[#BE8871] text-start font-medium">experience</th>
                                    </tr>
                                    </thead>
                                    <tbody class="group index-1 text-sm text-stone-800 dark:text-white">
                                    @foreach($skills as $skill)
                                        <tr class="border-b  border-[#BE8871] bg-[#BE8871]/10 last:border-0">
                                            <td class="p-1 text-xs">{{ $skill->type }}</td>
                                            <td class="p-1 text-xs">{{ $skill->name }}</td>
                                            <td class="p-1 text-xs">{{ $skill->experience }}</td>
                                        </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                                </div>
                        </div>
                    </div>
                    <div id="tab2-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for React.</p> --}}
                        <div style="position: relative; " class=" h-[83vh] mt-[50px] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            @include('resume')
                        </div>
                    </div>
                    <div id="tab3-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for Vue.</p> --}}
                        <div style="position: relative; " class=" h-[83vh] mt-[50px] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            {{-- <ul class="flex flex-col gap-0.5 min-w-60">
                                @foreach($data as $d)
                                    <a href="#list-with-link" class="flex items-center py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none bg-transparent text-stone-600 hover:text-stone-800 dark:hover:text-white hover:bg-stone-200 focus:bg-stone-200 focus:text-stone-800 dark:focus:text-white dark:data-[selected=true]:text-white dark:bg-opacity-70">
                                        {{$d->title}}
                                    </a>
                                @endforeach
                                
                            </ul> --}}
                            <ul class="flex flex-col gap-0.5 min-w-60">
                                <a href="https://xs196318.xsrv.jp/scheduleDayPailot" target="_blank">
                                    <li class="bg-white/30 flex items-center py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none text-stone-600 hover:text-stone-800 dark:hover:text-white hover:bg-stone-200 focus:bg-stone-200 focus:text-stone-800 dark:focus:text-white dark:data-[selected=true]:text-white dark:bg-opacity-70">
                                        <span class="grid place-items-center shrink-0 me-2.5">
                                        <img src="{{ asset('sch.png') }}" alt="profile-picture" class="2inline-block object-cover object-center w-32 h-22 rounded-md" />
                                        </span>
                                        <div>
                                        <p class="font-sans antialiased text-base text-stone-800 dark:text-white font-semibold">schedule demo system</p>
                                        <small class=" text-xs font-sans antialiased text-stone-600">
                                            <span class="openAni4">【使用技術】</span><br>
                                            <span class="openAni4">Laravel / PHP / MySQL / Bootstrap / ajax / jqueryUI</span><br>
                                            <span class="openAni4">【工夫した点】</span><br>
                                            <span class="openAni4">jqueryUIによるドラック操作、セルの複数選択を実装。</span><br>
                                            <span class="openAni4">右クリックによるコンテキストメニューを表示表示。</span>
                                            <span class="openAni4">Email：admin@nagano.co.jp</span><br>
                                            <span class="openAni4">pass：19971215</span>
                                            <br><br>
                                        </small>
                                        </div>
                                    </li>
                                </a>
                                <a href="https://xs196318.xsrv.jp/mitumoriSetubiKani/index/1184" target="_blank">
                                    <li class="bg-white/30 flex items-center py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none  text-stone-600 hover:text-stone-800 dark:hover:text-white hover:bg-stone-200 focus:bg-stone-200 focus:text-stone-800 dark:focus:text-white dark:data-[selected=true]:text-white dark:bg-opacity-70">
                                        <span class="grid place-items-center shrink-0 me-2.5">
                                        <img src="{{ asset('mitu.png') }}" alt="profile-picture" class="inline-block object-cover object-center w-32 h-22 rounded-md" />
                                        </span>
                                        <div>
                                        <p class="font-sans antialiased text-base text-stone-800 dark:text-white font-semibold">見積 demo system</p>
                                        <small class="font-sans antialiased text-xs text-stone-600">
                                            <span class="openAni4">【使用技術】</span><br>
                                            <span class="openAni4">Laravel / PHP / MySQL / Tailwind css / ajax / sortable.js / jstree</span><br>
                                            <span class="openAni4">【工夫した点】</span><br>
                                            <span class="openAni4">行ごとの数量×単価=金額、テーブル全体の金額合計、歩掛×労務単価など計算をリアルタイムで</span>
                                            <span class="openAni4">段階的に計算するように実装。</span><br>
                                            <span class="openAni4">資材データなどはjstreeによる階層構造のツリーで表示。</span><br>                                                           
                                            <span class="openAni4">login情報は上記と同じ</span><br>                                                           
                                        </small>
                                        </div>
                                    </li>
                                </a>
                                </ul>
                        </div>
                    </div>
                    <div id="tab4-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for Angular.</p> --}}
                        <div style="position: relative;" class=" h-[83vh] mt-[50px] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            @include('contact')
                        </div>
                    </div>
                    <div id="tab5-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for Svelte.</p> --}}
                        <div style="position: relative;" class=" h-[83vh] mt-[50px] max-w-sm bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            <p class="mb-4 text-neutral-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



@endsection