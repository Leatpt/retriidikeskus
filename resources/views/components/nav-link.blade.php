@props(['active' => false])

<a class="{{ $active ? 'bg-lime-200 text-gray-900' : 'text-gray-800 hover:bg-lime-300 hover:text-black'}} px-1 rounded-md sm:px-3 py-2 text-sm font-medium -rotate-45 sm:rotate-none "
   aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>