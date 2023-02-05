<div>
    @foreach ($product_reviews as $item)
    <div class="product-review-item">
        <div class="product-review-top">
            <div class="product-review-thumb">
                @if ($item->user->photo)
                    <img src="/{{ $item->user->photo }}" width="64" alt="Images">
                @else
                    <img src="{{ asset('/avatar.png') }}" width="64" alt="Images">
                @endif
            </div>
            <div class="product-review-content">
                <h4 class="product-review-name">{{ $item->user->first_name . " " . $item->user->last_name }}</h4>
                {{-- <h5 class="product-review-designation">Delveloper</h5> --}}
                <div class="product-review-icon">
                    @for ($i = 0; $i < $item->star; $i++)
                        <i class="fa fa-star"></i>
                    @endfor
                </div>
            </div>
        </div>
        <p class="desc">{{ $item->review_description }}</p>

        @if (Auth::user() && $item->creator == Auth::user()->id)
            <button type="button" wire:click="removeReview({{ $item->id }})" class="review-reply" data-bs-toggle="tooltip" data-bs-placement="top" title="Undo review"><i class="fa fa fa-undo"></i></button>
        @endif
    </div>
    @endforeach
    
</div>
