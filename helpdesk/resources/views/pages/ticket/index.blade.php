<x-app-layout>
    <x-slot name="header">
        <h2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __( $status ) }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    @if( $tickets->isEmpty() )
                    Currently no tickets...
                    @else
                    <table style="width:80%" >
                    <tr>
                    <td class="title">Subject</td>
                    </tr>
                    @foreach($tickets as $ticket)
                    <tr>
                    <td>{{ $ticket->subject }}</td>
                    
                    </tr>

                    @endforeach

                    </table>
                    
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