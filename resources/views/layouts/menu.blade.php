<li class="treeview">

</li>
<li class="{{ Request::is('admissions*') ? 'active' : '' }}">
    <a href="{{ route('admissions.index') }}"><i class="fa fa-graduation-cap textoSide"></i><span class="textoSide">Admissions</span></a>
</li>

<li class="{{ Request::is('teachers*') ? 'active' : '' }}">
    <a href="{{ route('teachers.index') }}"><i class="fa fa-user-circle textoSide"></i><span class="textoSide">Teachers</span></a>
</li>





</ul>
</li>


