<x-app-layout>
    <x-slot name="header">
        <h2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Applicants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hier komt een tabel met sollicitanten 
                    <br>
                    @if( $applicants->isEmpty() )
                    Currently no applications...
                    @else
                    <table style="width:80%" >
                    <tr>
                    <td class="title">Name</td>
                    <td class="title" >E-mail</td>
                    <td class="title">Date</td>
                    </tr>
                    <br>
                    @foreach($applicants as $applicant)
                    <tr>
                    <td>{{ $applicant->user->name }}</td>
                    
                    <td>
                    <x-link :href="('mailto:' . $applicant->user->email)">
                    {{ $applicant->user->email }}
                    </x-link>
                    </td>


                    <td>{{ $applicant->created_at->toFormattedDateString() }}</td>
                    </tr>
                    <br>

                    @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>

.title {
    color: #1a202c;
    font-size: 1.25rem;
    line-height: 1.25;
    }

    
</style>