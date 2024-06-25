<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Program;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class Home extends Component implements HasForms
{
    use InteractsWithForms;

    public $nis;
    public $nama_lengkap;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $alamat;
    public $nomor_telepon;
    public $email;
    public $course_id;
    public $program_id;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                TextInput::make('nis')
                    ->label('NIS')
                    ->required()
                    ->unique(),
                TextInput::make('nama_lengkap')
                    ->label('Nama Lengkap')
                    ->required(),
                TextInput::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->required(),
                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->required(),
                Textarea::make('alamat')
                    ->label('Alamat')
                    ->required(),
                TextInput::make('nomor_telepon')
                    ->label('Nomor Telepon')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->nullable(),
                Select::make('course_id')
                    ->label('Course')
                    ->options(Course::all()->pluck('name', 'id')) // Memilih nama dan ID program
                    ->required(),
                Select::make('program_id')
                    ->label('Program')
                    ->options(Program::all()->pluck('name', 'id')) // Memilih nama dan ID program
                    ->required(),
                    ])
            ]);
    }
    
    public function render()
    {
        return view('livewire.home');
    }

    public function save(): void {
        dd($this->forms()->getState());
    }
    
}
