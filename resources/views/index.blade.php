
<h2 style="text-align: center; margin-bottom: 15px;">Employee List</h2>
<div style="width:100%;  display: flex; justify-content: center;">
<div style="width:52%; display: flex; justify-content: space-between; margin-bottom: 15px;">
     <form class="form" action="{{route('employee.index')}}" method="GET">
            @csrf
            <input type="text" name="search" placeholder="Search">
        </form>
    <a href="{{ route('employee.create') }}"
       style="
           padding: 8px 15px;
           background-color: #4CAF50;
           color: white;
           text-decoration: none;
           border-radius: 5px;
           font-weight: bold;
       ">
        + Add Employee
    </a>
</div>
</div>

<table style="width: 100%; max-width: 1000px; margin: 0 auto; border-collapse: collapse; background: #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
    <thead>
        <tr style="background: #667eea; color: white;">
            <th style="padding: 10px; border: 1px solid #ccc;">ID</th>
            <th style="padding: 10px; border: 1px solid #ccc;">Name</th>
            <th style="padding: 10px; border: 1px solid #ccc;">Age</th>
            <th style="padding: 10px; border: 1px solid #ccc;">Position</th>
            <th style="padding: 10px; border: 1px solid #ccc;">Email</th>
            <th style="padding: 10px; border: 1px solid #ccc;">Salary</th>
            <th style="padding: 10px; border: 1px solid #ccc;">Function</th>
        </tr>
    </thead>
    <tbody>
         @foreach ($employees as $employee)
                    <tr>
                <td style="padding: 10px; border: 1px solid #ccc;"> {{$employee -> id}}       </td>
                <td style="padding: 10px; border: 1px solid #ccc;"> {{$employee -> name}}     </td>
                <td style="padding: 10px; border: 1px solid #ccc;"> {{$employee -> age}}      </td>
                <td style="padding: 10px; border: 1px solid #ccc;"> {{$employee -> position}} </td>
                <td style="padding: 10px; border: 1px solid #ccc;"> {{$employee -> email}}    </td>
                <td style="padding: 10px; border: 1px solid #ccc;"> {{$employee -> salary}}   </td>
             <td style="padding: 10px; border: 1px solid #ccc;">
    <div style="
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    ">
        <a href="{{ route('employee.edit', ['employee' => $employee]) }}"
           style="
               padding: 6px 12px;
               background-color: #4CAF50;
               color: white;
               text-decoration: none;
               border-radius: 5px;
               font-weight: bold;
           ">
            Edit
        </a>

        <form action="{{ route('employee.destroy', ['employee' => $employee]) }}" method="POST" style="margin: 0;">
            @csrf
            @method('delete')
            <button type="submit"
                style="
                    padding: 6px 12px;
                    background-color: #f44336;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    font-weight: bold;
                    cursor: pointer;
                ">
                Delete
            </button>
        </form>
    </div>
</td>

          </tr>
        @endforeach
    </tbody>
</table>

