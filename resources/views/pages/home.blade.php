<h1>ciao</h1>

<ul>
    @foreach ($employees as $employee)
    <li>
        <p style="text: green;">
           ciclo nella cartella originiaria
        </p>
        
        <h3>{{ $employee -> firstname}}</h3>

        <p style="text: green;">
           ciclo nella cartella relazionata 
        </p> 
        <ul>
            @foreach ($employee->tasks as $task )
                <li style="color: red;">
                    {{$task -> title}}
                </li>
            @endforeach
        </ul>
    </li>
        
    @endforeach
</ul>