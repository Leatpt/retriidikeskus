@props(['active' => false])

<a class="{{ $active ? 'bg-lime-200 text-gray-900' : 'text-gray-800 hover:bg-lime-300 hover:text-black'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>