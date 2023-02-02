<div>
    <form>
        <select wire:model="selectedCategory" class="form-control" style="width:200px;">
            <option value="">All</option>
            @foreach($categories as $category)
                <option value="{{ $category }}">{{ $category }}</option>
            @endforeach
        </select>
    </form>

    <!-- The rest of the template remains the same -->

</div>