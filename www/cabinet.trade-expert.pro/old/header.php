<div class="container">
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
			<?
if (isset($_SESSION['loginid'])){
echo '<li';
	activemenu("/");
	echo ' ><a href="/index.html">Main</a></li>';
	echo "<li ";
	activemenu("/users.html");
		echo " ><a href=\"/users.html\">Users</a></li>";
	
	echo '<ul class="nav">
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">
        Customers
        <b class="caret"></b>
      </a>
    <ul class="dropdown-menu">
    <li><a href="/clients.html">List</a></li>
	 <li><a href="/newclient.html">New Customer</a></li>
    </ul>
  </li>
</ul>';
	
	
	echo '<ul class="nav">
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">
       Analytics
        <b class="caret"></b>
      </a>
    <ul class="dropdown-menu">
    <li><a href="/new_message.html">Create</a></li>
	 <li><a href="#">History</a></li>
    </ul>
  </li>
</ul>';
	
	echo '<ul class="nav">
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">
        Offices
        <b class="caret"></b>
      </a>
    <ul class="dropdown-menu">
    <li><a href="#">Rating</a></li>
    <li><a href="/officelist.html">Office List</a></li>
    <li><a href="/newoffice.html">New Office</a></li>
    </ul>
  </li>
</ul>';
	
	 echo "<li ";
	activemenu("/site.html");
		echo " ><a href=\"/site.html\">Site</a></li>";
}
?>
				
	</ul>
			<ul class="nav pull-right">
	<?
if (isset($_SESSION['loginid'])){
	echo '<li><a href="settings.html">Settings</a></li>';
echo '<li><a href="logout.html">Exit</a></li>';
}else{
}
				 
					 ?>
</ul>
			</div>
	</div>
