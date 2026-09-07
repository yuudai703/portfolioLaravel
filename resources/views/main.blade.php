@extends("layout.app2")
@section("content")
<script src="https://cdn.jsdelivr.net/gh/creativetimofficial/david-ai@1.0.6/packages/dist/david-ai.min.js"></script>

    {{-- <div class="h-[300px]">&nbsp;</div> --}}



    <div class="grid grid-cols-12 gap-6">
    

        <div style="position: relative;" class="col-span-4 mt-[20vh] h-[75vh] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
            <img class="index-3" id="myPro" style='z-index:3; top:-120px; left:50px; border-radius:150px; position: absolute; width: 170px; height: 170px;' src="{{asset('pro2.jpg')}}" alt="logo" />
            <div class="index-2 bg-[#BE8871]/60" style='z-index:2; top:-120px; left:80px; border-radius:150px; position: absolute; width: 170px; height: 170px; '>
            </div>
            <h5 class="index-4 top-3 text-xl absolute font-bold leading-none tracking-tight text-[#b18573]" style="z-index:10; position: absolute; -webkit-text-stroke: 0.5px black;">Web Engineer</h5>
            <p class="text-[#7b4f3d]">
            新井 勇大　Yudai Arai <br>
            born H9 <br>
            Birthplace Nagano prefectur<br>
            LaravelによるWEB業務システム開発を中心に
            </p>



            
        </div>

        <div class="col-span-1">
        </div>
        <div class="col-span-7">
            <div class="relative tab-group mt-[20vh] w-full h-[75vh] max-h-[75vh]">
                <div class="-top-[70px] flex bg-[#186A70]/30 p-0.5 absolute rounded-lg" role="tablist">
                    <div class="absolute top-1 left-0.5 h-8 bg-[#3B8B8E]/50 rounded-md shadow-sm transition-all duration-300 transform scale-x-0 translate-x-0 tab-indicator z-0"></div>

                    <a href="#" class="tab-link text-sm active inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab1-group">
                    Skills
                    </a>
                    <a href="#" class="tab-link text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab2-group">
                    Resume / CV
                    </a>
                    <a href="#" class="tab-link text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab3-group">
                    Blog
                    </a>
                    <a href="#" class="tab-link text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab4-group">
                    Contact
                    </a>
                    <a href="#" class="tab-link text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab5-group">
                    
                    </a>
                </div>
                <div class="mt-4 tab-content-container ">
                    <div id="tab1-group" class="tab-content text-stone-500 text-sm block">
                    <!-- {{-- <p>Content for HTML.</p> --}} -->
                        <div style="position: relative;" class="mt-[50px] w-full h-[75vh] bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            <div class="w-full overflow-scroll rounded-lg border border-[#BE8871] h-full">
                                <table class="w-full">
                                    <thead class="border-b border-[#BE8871]  text-sm font-medium text-stone-600 dark:bg-surface-dark">
                                    <tr>
                                        <th class="px-2.5 sticky top-0 py-2 bg-[#BE8871] text-start font-medium">type</th>
                                        <th class="px-2.5 sticky top-0 py-2 bg-[#BE8871] text-start font-medium">name</th>
                                        <th class="px-2.5 sticky top-0 py-2 bg-[#BE8871] text-start font-medium">experience</th>
                                    </tr>
                                    </thead>
                                    <tbody class="group text-sm text-stone-800 dark:text-white">
                                    @foreach($skills as $skill)
                                        <tr class="border-b border-[#BE8871] bg-[#BE8871]/10 last:border-0">
                                            <td class="p-3">{{ $skill->type }}</td>
                                            <td class="p-3">{{ $skill->name }}</td>
                                            <td class="p-3">{{ $skill->experience }}</td>
                                        </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                                </div>
                        </div>
                    </div>
                    <div id="tab2-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for React.</p> --}}
                        <div style="position: relative; " class=" h-[75vh] mt-[50px] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            @include('resume')
                        </div>
                    </div>
                    <div id="tab3-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for Vue.</p> --}}
                        <div style="position: relative; " class=" h-[75vh] mt-[50px] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            <ul class="flex flex-col gap-0.5 min-w-60">
                                @foreach($data as $d)
                                    <a href="#list-with-link" class="flex items-center py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none bg-transparent text-stone-600 hover:text-stone-800 dark:hover:text-white hover:bg-stone-200 focus:bg-stone-200 focus:text-stone-800 dark:focus:text-white dark:data-[selected=true]:text-white dark:bg-opacity-70">
                                        {{$d->title}}
                                    </a>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div id="tab4-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for Angular.</p> --}}
                        <div style="position: relative;" class=" h-[75vh] mt-[50px] w-full bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            @include('contact')
                        </div>
                    </div>
                    <div id="tab5-group" class="tab-content text-stone-500 text-sm hidden">
                    {{-- <p>Content for Svelte.</p> --}}
                        <div style="position: relative;" class=" h-[75vh] mt-[50px] max-w-sm bg-[#BEB7A5] border rounded-lg shadow-sm p-7 border-neutral-200/60">
                            <p class="mb-4 text-neutral-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



@endsection