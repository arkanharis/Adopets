<nav aria-label="Page navigation example">
    <ul class="inline-flex -space-x-px text-sm">
        <li>
            @if ($paginator->onFirstPage())
                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg cursor-not-allowed opacity-50">Previous</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            @endif
        </li>
        <!-- List of page numbers -->
        @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
            <li>
                <a href="{{ $url }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white {{ $paginator->currentPage() == $page ? 'text-blue-600 bg-blue-50 hover:bg-blue-100' : '' }}">{{ $page }}</a>
            </li>
        @endforeach
        <!-- Next Page Link -->
        <li>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            @else
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg cursor-not-allowed opacity-50">Next</a>
            @endif
        </li>
    </ul>
</nav>
