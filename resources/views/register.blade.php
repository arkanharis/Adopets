<!DOCTYPE html>
<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('nav')

    <div class="flex justify-center">
        <form action="/signup" method="post"
            class="bg-[#FFFFFF] flex flex-col items-center w-[1440px] box-sizing-border mx-auto">
            <div class="m-[0_0_0_81px] flex flex-row w-[fit-content] box-sizing-border">
                <div class="m-[45px_81px_190px_0] flex flex-col items-center box-sizing-border">
                    <div class="m-[0_0_46px_0] flex self-start box-sizing-border">
                        <span
                            class="break-words font-['Inter'] font-[var(--title-font-weight,700)] text-[64px] tracking-[var(--title-letter-spacing,-1.3px)] text-[#000000]">
                            Sign Up
                        </span>
                    </div>
                    <div class="m-[0_0_49px_13px] flex flex-col w-[fit-content] box-sizing-border">
                        <div class="m-[0_2px_24px_0] flex flex-row w-[fit-content] box-sizing-border">
                            <div class="m-[0_32px_0_0] flex flex-col w-[295px] box-sizing-border">
                                <label for="first_name"
                                    class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-[var(--small-text-font-weight,500)] text-[16px] leading-[var(--small-text-line-height,1.5)] text-[#000000]">
                                    First name
                                </label>
                                <input type="text" id="first_name" name="first_name"
                                    class="shadow-[var(--button-shadow,0px_1px_2px_2px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_11px_15px] w-[300px] box-sizing-border"
                                    placeholder="First name">
                            </div>
                            <div class="flex flex-col w-[297px] box-sizing-border">
                                <label for="last_name"
                                    class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-[var(--small-text-font-weight,500)] text-[16px] leading-[var(--small-text-line-height,1.5)] text-[#000000]">
                                    Last name
                                </label>
                                <input type="text" id="last_name" name="last_name"
                                    class="shadow-[var(--button-shadow,0px_1px_2px_2px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_11px_15px] w-[300px] box-sizing-border"
                                    placeholder="Last name">
                            </div>
                        </div>
                        <div class="m-[0_0_24px_0] flex flex-col w-[fit-content] box-sizing-border">
                            <label for="email"
                                class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-[var(--small-text-font-weight,500)] text-[16px] leading-[var(--small-text-line-height,1.5)] text-[#000000]">
                                Email address
                            </label>
                            <input type="email" id="email" name="email"
                                class="shadow-[var(--button-shadow,0px_1px_2px_2px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_11px_15px] w-[626px] box-sizing-border"
                                placeholder="Email">
                        </div>
                        <div class="m-[0_0_24px_0] flex flex-col w-[fit-content] box-sizing-border">
                            <label for="password"
                                class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-[var(--small-text-font-weight,500)] text-[16px] leading-[var(--small-text-line-height,1.5)] text-[#000000]">
                                Password
                            </label>
                            <input type="password" id="password" name="password"
                                class="shadow-[var(--button-shadow,0px_1px_2px_2px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_11px_15px] w-[626px] box-sizing-border"
                                placeholder="Password">
                        </div>
                        <button type="submit"
                            class="shadow-[var(--button-shadow,0px_1px_2px_0px_rgba(0,0,0,0.05))] rounded-[8px] bg-[#000000] flex p-[13.5px_0.5px_13.5px_0] w-[626px] box-sizing-border">
                            <span
                                class="break-words font-['Inter'] font-[var(--body-text-font-weight,500)] text-[20px] leading-[var(--body-text-line-height,1.5)] text-[#FFFFFF]"
                                style="margin: auto;">
                                Sign Up
                            </span>
                        </button>
                        <div class="mt-4 text-center">
                            <span class="text-[#000000]">Already have an account? </span>
                            <a href="/" class="text-blue-500">Login</a>
                        </div>
                    </div>
                    <div class="m-[0_0_14px_13px] flex box-sizing-border">
                        <span
                            class="break-words font-['Inter'] font-[var(--small-text-font-weight,500)] text-[16px] leading-[var(--small-text-line-height,1.5)] text-[#000000]">
                            Or Sign Up with
                        </span>
                    </div>
                    <div class="rounded-[10px] bg-[#CECBCB] relative m-[0_0_0_1px] flex flex-row p-[3px_0_3px_0] w-[428px] box-sizing-border">
                        <div class="flex items-center" style="margin: auto;">
                            <div
                                class="bg-[url('../../resources/images/LogoGoogle.png')] bg-[50%_50%] bg-cover bg-no-repeat w-[44px] h-[40px]">
                            </div>
                            <div class="ml-[10px] inline-block break-words font-['Inter'] font-normal text-[16px] tracking-[-0.3px] text-[#000000]">
                                Sign Up with Google
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[url('../../resources/images/register.png')] bg-[50%_50%] bg-cover bg-no-repeat w-[639px] h-[860px]">
                </div>
            </div>
        </form>
    </div>

</body>

</html>
