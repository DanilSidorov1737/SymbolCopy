<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchBar extends Component
{
    public $showdiv = false;
    public $search = "";
    public $records;
    public $empDetails;
    public $highlightIndex;


    // Fetch records


    public function mount()
    {
        $this->reset();
    }
 
    public function resetSearch()
    {
        $this->search = '';
        
        
    }

  


    public function searchResult()
    {
        if (!empty($this->search)) {
            $this->records = \App\Models\Codes::orderBy('name', 'asc')
                ->select('*')
                ->where('name', 'like', '%' . $this->search . '%')
                ->limit(5)
                ->get();

               // dd($this->records);

            $this->showdiv = true;

            


        } else {
            $this->showdiv = false;
        }
    }

    // Fetch record by ID
    public function fetchEmployeeDetail($id = 0)
    {
        $record = \App\Models\Codes::select('*')
            ->where('id', $id)
            ->first();

        $this->search = $record->name;
        $this->empDetails = $record;
        $this->showdiv = false;

       

        return redirect()->route('search', ['record' => $record]);
    }

public function showAllRecords()
    {
    if (!empty($this->search)) {
        $this->records = \App\Models\Codes::orderBy('name', 'asc')
            ->select('*')
            ->where('name', 'like', '%' . $this->search . '%')
            ->limit(5)
            ->get();
            
            $recordIds = $this->records->pluck('id')->toArray();


            return redirect()->route('all', ['recordIds' => implode(',', $recordIds)]);
    
        }

        
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}

