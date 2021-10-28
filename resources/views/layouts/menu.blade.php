<li class="nav-item">
    <a href="{{ route('employeems.index') }}"
       class="nav-link {{ Request::is('employeems*') ? 'active' : '' }}">
        <p>Employees</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('employeeSalaries.index') }}"
       class="nav-link {{ Request::is('employeeSalaries*') ? 'active' : '' }}">
        <p>Employee Salaries</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('departments.index') }}"
       class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
        <p>Departments</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('divisions.index') }}"
       class="nav-link {{ Request::is('divisions*') ? 'active' : '' }}">
        <p>Divisions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('countries.index') }}"
       class="nav-link {{ Request::is('countries*') ? 'active' : '' }}">
        <p>Countries</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('states.index') }}"
       class="nav-link {{ Request::is('states*') ? 'active' : '' }}">
        <p>States</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('cities.index') }}"
       class="nav-link {{ Request::is('cities*') ? 'active' : '' }}">
        <p>Cities</p>
    </a>
</li>


