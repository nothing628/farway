<div class="mb-[30px] text-sm block clear-both bg-[rgba(0,0,0,.024)]">
    <div class="block">
        <ul class="block m-0">
            <li class="bg-gradient-to-r from-[rgba(234,56,77,1)] to-[rgba(211,16,39,1)]">
                <dl class="relative overflow-hidden">
                    <dt class="text-white my-[14px] float-left -mr-[530px] pl-[15px] py-0.5 font-light text-base w-full">
                        <div class="pl-0 pr-[50px] mr-[440px]">
                            <a>Category One</a>
                        </div>
                    </dt>
                    <dd class="text-white my-[14px] float-left py-0.5 w-[190px] text-center"><span class="fa fa-comments"></span></dd>
                    <dd class="text-white my-[14px] float-left py-0.5 w-[300px] text-left"><span class="pl-[5px] fa fa-clock"></span></dd>
                </dl>
            </li>
        </ul>
        <div class="float-right block relative mr-4 -mt-[36px]" aria-expanded="true">
            <a class="text-white" href="#">
                <span class="fa fa-minus block"></span>
                <span class="fa fa-plus hidden"></span>
            </a>
        </div>
        <div class="p-[10px]" aria-hidden="false">
            {{ $slot }}
        </div>
    </div>
</div>
