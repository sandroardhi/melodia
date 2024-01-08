<x-navbar></x-navbar>
<x-guest-layout>
    <div x-data="{ activeSlide: 0 }" class="w-[90%] mx-10   ">
        <div class="flex overflow-hidden w-[90%]">
          <div x-show="activeSlide === 0" class="transition-transform ease-in-out"><img src="" alt=""></div>
        </div>
      
        <div class="flex justify-between mt-3">
          <button @click="activeSlide = (activeSlide - 1 + 3) % 3">Previous</button>
          <button @click="activeSlide = (activeSlide + 1) % 3">Next</button>
        </div>
      </div>
      
</div>
    <div class="  p-6 lg:p-8">
        <p class="text-3xl mb-3">Produk terbaru kami: </p>
        <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 w-full">
            @foreach ($barangs as $barang)
                <a href="{{ "/dashboard/barang/".$barang->id }}"
                    class="w-full bg-white rounded-md overflow-hidden shadow-md">
                    @if ($barang->gambar == 'default.jpg')
                        <div class="w-sm h-32 block">
                            <img class="rounded-t-lg object-cover w-full h-full" src="{{ asset('gambar/default.jpg') }}"
                                alt="" />
                        </div>
                    @else
                        <div>
                            <img class="rounded-t-lg" src="{{ asset('storage/' . $barang->gambar) }}" alt="" />
                        </div>
                    @endif
                    <div class="p-4">
                        <p class="text-gray-700 mb-4">{{ $barang->kategori }}</p>
                        <h2 class="text-xl font-bold mb-2">{{ $barang->nama }}</h2>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">{{ $barang->harga }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</x-guest-layout>
