<section id="contact" class="text-center min-h-screen">
    <div class="bg-tile mb-12">
        <h2
            class="font-bold text-2xl sm:text-4xl px-1  mt-5 sm:mt-20 border-b border-white border-solid inline-block">
            Require our
            Expertise?
        </h2>
        <p class="mt-8 mb-4 px-2 text-sm">Just fill out the form and one of our team will get in touch</p>
        <p class="italic text-xs px-2 mb-12">All contact information will be kept completely confidential</p>

        <form action="/#contact" method="post" class="w-full max-w-5xl px-8 mx-auto">
            @csrf

            @if(session('message'))
            <div class="font-bold">
                {{ session('message') }}
            </div>
            @endif

            <div class="mb-1">
                <label for="name" class="block text-sm text-left mb-4">*Name</label>
                <input type="text" name="name" id="name" class="h-12 text-black w-full text-lg p-1" required>
            </div class="mb-1">
            <div class="mb-1 grid grid-cols-1 xl:grid-cols-2 xl:gap-x-2 ">
                <div>
                    <label for="phone" class="block text-sm text-left my-4">*Phone number </label>
                    <input type="tel" name="phone" id="phone" class="h-12 text-black w-full text-lg p-1" required>
                </div>
                <div>
                    <label for="time" class="block text-sm text-left my-4">*Best time to call</label>
                    <input type="text" name="time" id="time" class="h-12 text-black w-full text-lg p-1" required>
                </div>
            </div>
            <div class="mb-1">
                <label for="email" class="block text-sm text-left my-4">*Email </label>
                <input type="email" name="email" id="email" class="w-full h-12 text-black text-lg p-1" required>
            </div>

            <input type="submit" value="Submit"
                class="bg-white my-16 py-3 px-10 text-black text-lg font-bold hover:text-white hover:bg-greydark">
        </form>
    </div>

    <div class="bg-white text-greyonwhite grid sm:grid-cols-3 max-w-screen-xl xl:mx-auto">
        <div class="mb-4 sm:mb-12">
            <img src="/images/address.png" alt="Address icon." class="w-24 mx-auto sm:mb-8">
            <p class="text-sm md:text-base font-semibold px-4 lg-0">Suite 10-12, Mezzanine Floor Royal Liver
                Building, Pier Head,
                Liverpool,
                Merseyside,
                England, L3 1HU
            </p>
        </div>
        <div class="mb-4 sm:mb-12">
            <a href="tel:0151 329 3800">
                <img src="/images/phone.png" alt="Phone icon." class="w-24 mx-auto sm:mb-8">
                <p class="font-semibold">Call us on:</p>
                <h3 class="md:text-xl font-semibold">0151 329 3800</h3>
            </a>
        </div>
        <div class="mb-4 sm:mb-12">
            <a href="mailto:info@ismsports.co.uk">
                <img src="/images/email.png" alt="Email icon." class="w-24 mx-auto sm:mb-8">
                <p class="font-semibold">Email us at:</p>
                <h3 class="md:text-xl font-semibold">info@ismsports.co.uk</h3>
            </a>
        </div>
    </div>
</section>
