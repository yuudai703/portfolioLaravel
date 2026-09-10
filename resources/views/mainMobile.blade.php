@extends("layout.app2")
@section("content")
<script src="https://cdn.jsdelivr.net/gh/creativetimofficial/david-ai@1.0.6/packages/dist/david-ai.min.js"></script>

    {{-- <div class="h-[300px]">&nbsp;</div> --}}



    <style>
        .sample {
            -ms-overflow-style: none; /* IE, Edge 対応 */
            scrollbar-width: none;    /* Firefox 対応 */
        }

        .smaple::-webkit-scrollbar {
            display: none; /* Chrome, Safari 対応 */
        }
        
    </style>

    

       

        
            <div class="h-[10px]">&nbsp;</div>
            <div class="relative tab-group">
                <div style="position: relative;" class=" mt-1 col-span-4 h-[55vh] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                                <img class="index-3" id="myPro" style='z-index:3; top:60px; left:20px; border-radius:150px; position: absolute; width: 70px; height: 70px;' src="{{asset('pro2.jpg')}}" alt="logo" />
                                <div class="index-2 bg-[#BE8871]/60" style='z-index:2; top:60px; left:30px; border-radius:150px; position: absolute; width: 70px; height: 70px; '></div>

                                    <h5 class="text-lg  font-bold leading-none tracking-tight text-stone-600" style=" top:50px; left:110px;position: absolute;">Web Engineer / Developer</h5>
                                    <p class="text-stone-600" style=" top:80px; left:110px;position: absolute;">
                                    <span class="openAni">新井 勇大　Yudai Arai</span> <br>
                                    <span class="openAni">born 1997</span> <br>
                                    <span class="openAni">Birthplace Nagano prefectur</span><br><br>
                                    </p>
                                    <p class="text-stone-600 px-[10px]" style=" top:180px; left:0px;position: absolute;">
                                    <span class="openAni">システムを利用する側から、テスト・保守運用、そして開発まで、システム開発の各工程を経験しながら、段階的にエンジニアとしてのスキルを身につけてまいりました。</span><br>
                                    <span class="openAni">現在は Laravel / PHP / MySQL</span><br> 
                                    <span class="openAni">を中心に、業務システムのWebアプリケーション開発に携わっています。</span>
                                    </p>
                                    
                            </div>
                <div class="tab-content-container ">
                    <div id="tab1-group" class="tab-content text-stone-500 text-sm block">
                    {{-- <p>Content for Svelte.</p> --}}
                        <div style="position: relative;" class=" h-[90vh] max-w-sm bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            
                        </div>
                    </div>
                    <div id="tab2-group" class="tab-content text-stone-500 text-sm  hidden">
                    <!-- {{-- <p>Content for HTML.</p> --}} -->
                        <div style="position: relative;" class=" w-full h-[530px] bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            <div style="overflow-x: hidden;" class="w-full sample overflow-scroll rounded-lg border border-[#BE8871] h-full">
                                <table class="w-full">
                                    <thead class="border-b  border-[#BE8871]  text-sm font-medium text-stone-600 dark:bg-surface-dark">
                                    <tr>
                                        <th style="z-index:10;" class="openAni2 px-2.5 sticky top-0 py-1 bg-[#BE8871] text-start font-medium">type</th>
                                        <th style="z-index:10;" class="openAni2 px-2.5 sticky top-0 py-1 bg-[#BE8871] text-start font-medium">name</th>
                                        <th style="z-index:10;" class="openAni2 px-2.5 sticky top-0 py-1 bg-[#BE8871] text-start font-medium">experience</th>
                                    </tr>
                                    </thead>
                                    <tbody class="group index-1 text-xs text-stone-800 dark:text-white">
                                    @foreach($skills as $skill)
                                        <tr class="border-b  border-[#BE8871] bg-[#BE8871]/10 last:border-0">
                                            <td class="p-1">{{ $skill->type }}</td>
                                            <td class="p-1">{{ $skill->name }}</td>
                                            <td class="p-1">{{ $skill->experience }}</td>
                                        </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                                </div>
                        </div>
                    </div>
                    <div id="tab3-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for React.</p> --}}
                        <div style="position: relative; " class=" h-[530px] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            @include('resume')
                        </div>
                    </div>
                    <div id="tab4-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for Vue.</p> --}}
                        <div style="position: relative; " class=" h-[530px]  w-full bg-[#BEB7A5] border rounded-lg shadow-sm px-7 py-3 border-neutral-200/60">
                            {{-- <ul class="flex flex-col gap-0.5 min-w-60">
                                @foreach($data as $d)
                                    <a href="#list-with-link" class="flex items-center py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none bg-transparent text-stone-600 hover:text-stone-800 dark:hover:text-white hover:bg-stone-200 focus:bg-stone-200 focus:text-stone-800 dark:focus:text-white dark:data-[selected=true]:text-white dark:bg-opacity-70">
                                        {{$d->title}}
                                    </a>
                                @endforeach
                                
                            </ul> --}}
                            <ul class="flex flex-col gap-0.5 min-w-60">
                                <a href="#" target="_blank">
                                    <li class="bg-white/30 py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none text-stone-600 hover:text-stone-800 dark:hover:text-white hover:bg-stone-200 focus:bg-stone-200 focus:text-stone-800 dark:focus:text-white dark:data-[selected=true]:text-white dark:bg-opacity-70">
                                        <div class="flex">
                                            <span class="grid place-items-center shrink-0 me-2.5">
                                                <img src="{{ asset('sch.png') }}" alt="profile-picture" class="2inline-block object-cover object-center w-32 h-22 rounded-md" />
                                            </span>
                                            <p class="font-sans antialiased text-base text-stone-800 dark:text-white font-semibold">schedule demo system</p>
                                        </div>
                                        <div>
                                        <small class=" font-sans antialiased text-sm text-stone-600">
                                            <span class="openAni4">【使用技術】</span><br>
                                            <span class="openAni4">Laravel / PHP / MySQL / Bootstrap / ajax / jqueryUI</span><br>
                                            <span class="openAni4">【工夫した点】</span><br>
                                            <span class="openAni4">jqueryUIによるドラック操作、セルの複数選択を実装。</span><br>
                                            <span class="openAni4">右クリックによるコンテキストメニューを表示表示。</span>
                                            <br><br>
                                        </small>
                                        </div>
                                    </li>
                                </a>
                                <a href="#" target="_blank">
                                    <li class="bg-white/30  py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none  text-stone-600 hover:text-stone-800 dark:hover:text-white hover:bg-stone-200 focus:bg-stone-200 focus:text-stone-800 dark:focus:text-white dark:data-[selected=true]:text-white dark:bg-opacity-70">
                                        <div class="flex">
                                            <span class="grid place-items-center shrink-0 me-2.5">
                                                <img src="{{ asset('mitu.png') }}" alt="profile-picture" class="inline-block object-cover object-center w-32 h-22 rounded-md" />
                                            </span>
                                            <p class="font-sans antialiased text-base text-stone-800 dark:text-white font-semibold">見積 demo system</p>
                                        </div>
                                        <div>
                                        <small class="font-sans antialiased text-sm text-stone-600">
                                            <span class="openAni4">【使用技術】</span><br>
                                            <span class="openAni4">Laravel / PHP / MySQL / Tailwind css / ajax / sortable.js / jstree</span><br>
                                            <span class="openAni4">【工夫した点】</span><br>
                                            <span class="openAni4">行ごとの数量×単価=金額、テーブル全体の金額合計、歩掛×労務単価など計算をリアルタイムで</span>
                                            <span class="openAni4">段階的に計算するように実装。</span><br>
                                            <span class="openAni4">資材データなどはjstreeによる階層構造のツリーで表示。</span><br>                                                           
                                        </small>
                                        </div>
                                    </li>
                                </a>
                                </ul>
                        </div>
                    </div>
                    <div id="tab5-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for Angular.</p> --}}
                        <div style="position: relative;" class=" h-[530px] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            @include('contact')
                        </div>
                    </div>
                    <div id="tab6-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for Svelte.</p> --}}
                        <div style="position: relative;" class=" h-[530px] mt-[50px] max-w-sm bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            <p class="mb-4 text-neutral-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </div>
                </div>
                <div class="flex bg-[#186A70]/30 bottom-0 p-0.5 h-12 relative rounded-lg" role="tablist">
                    <div class="absolute top-1 left-0.5 h-10 bg-[#3B8B8E]/50 rounded-md shadow-sm transition-all duration-300 transform scale-x-0 translate-x-0 tab-indicator z-0"></div>        
                    {{-- <a href="#" onclick="openAni()" class="tab-link text-center w-[20%] text-[10px] active inline-block py-2 px-1 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab1-group">
                    <span class="openAni">ME</span>
                    </a> --}}
                    <a href="#" onclick="openAni2()" class="tab-link text-center w-[25%] text-[10px] inline-block py-2 px-1 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab2-group">
                    <span class="openAni">SKILLS</span>
                    </a>
                    <a href="#" onclick="openAni3()" class="tab-link text-center w-[25%] text-[10px] inline-block py-2 px-1 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab3-group">
                    <span class="openAni">RESUME / CV</span>
                    </a>
                    <a href="#" onclick="openAni4()" class="tab-link text-center w-[25%] text-[10px] inline-block py-2 px-1 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab4-group">
                    <span class="openAni">PROTOTYPES</span>
                    </a>
                    <a href="#" onclick="openAni2()" class="tab-link text-center w-[25%] text-[10px] inline-block py-2 px-1 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab5-group">
                    <span class="openAni">CONTACT</span>
                    </a>
                </div>
            </div>


        
   



@endsection