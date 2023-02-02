<div >
    <!-- CSS -->
    <style type="text/css">
  .searchbar ul {
  /* Remove default list styling */
  list-style: none !important;
        padding: 0px !important;
        width: 500px !important;
        position: absolute !important;
        margin: 0 !important;
        background: white !important;
}
.searchbar ul li {
  border: 1px solid black !important; /* Add a border to all links */
  margin-top: -1px !important; /* Prevent double borders */
  background-color: white !important; /* Grey background color */
  padding: 12px !important; /* Add some padding */
  font-size: 18px !important; /* Increase the font-size */
  color: black !important; /* Add a black text color */
  display: block !important; /* Make it into a block element to fill the whole list */
}
.searchbar{
    margin-bottom: auto !important;
    margin-top: auto !important;
    height: 50px !important;
    background-color: #D3D3D3 !important;
    border-radius: 30px !important;
    padding: 5px !important;
    }
    .search_input{
    color: black !important;
    outline: 0 !important;
    background: none !important;
    caret-color:transparent !important;
    line-height: 40px !important;
    }
    .search_input{
    padding: 0 10px !important;
    width: 500px !important;
    caret-color:red !important;
    }
    .searchbar ul{
        list-style: none !important;
        padding: 0px !important;
        width: 500px !important;
        position: absolute !important;
        margin: 0 !important;
        background: white !important;
    }
    .searchbar   ul li:hover{
        cursor: pointer !important;
    }
    input::placeholder {
    font-weight: bold !important;
    opacity: 0.5 !important;
    color: black !important;
}
</style>

        <div class="searchbar">
        <input class="search_input"  
            wire:model="search" 
            wire:keyup="searchResult" 
            wire:keydown.escape="resetSearch"
            wire:keydown.tab="resetSearch"
            placeholder="Search... (Tab/Esc To Clear)"
            >
        @if($showdiv)
            <ul >
                @if(!empty($records))
                    @foreach($records as $record)
                    <li wire:click="fetchEmployeeDetail({{ $record->id }})">{{ $record->code}} {{ $record->name}}</li>
                    @endforeach
                @endif
               <li wire:click="showAllRecords" >Show All</li>
            </ul>
        @endif
        </div>
</div>


