<?php
function clean($string)
{
  if(get_magic_quotes_gpc())  // prevents duplicate backslashes
  {
    $string = stripslashes($string);
  }
  if (phpversion() >= '4.3.0')
  {
    $string = mysql_real_escape_string($string);
  }
  else
  {
    $string = mysql_escape_string($string);
  }
  return $string;
}

function myq($query)
{
	$result = @mysql_query ($query);
	if (!$result)
	{
		//echo "$query <br /><br />";
		die(mysql_error());
	}
	else 
	{
		$row = mysql_fetch_full_result_array($result);
	}
	return $row;
}

function post($POST)
{
	foreach($POST as $key => $value) 
	{
		$post2[$key] = clean($value);
	}
	return $post2;
}

function mysql_fetch_full_result_array($result)
{
    $table_result=array();
    $r=0;
    while($row = mysql_fetch_assoc($result)){
        $arr_row=array();
        $c=0;
        while ($c < mysql_num_fields($result)) {        
            $col = mysql_fetch_field($result, $c);    
            $arr_row[$col -> name] = $row[$col -> name];            
            $c++;
        }    
        $table_result[$r] = $arr_row;
        $r++;
    }    
    return $table_result;
}

function tbox($display, $name, $value)
{
	
	$value = addslashes($value);
	//echo $value;
	Echo "$display: <input type='text' name='$name' value='$value' /> <br />";
}

function pbox($display, $name)
{
	Echo "$display: <input type='password' name='$name' /> <br />";
}

function dbox($display, $name, $value, $fname)
{
	Echo "$display: <input type='text' name='$name' value='$value' /><script language='JavaScript'>
	new tcal ({
		// form name
		'formname': '$fname',
		// input name
		'controlname': '$name'
	});
	</script> <br />";
}

function startform($name, $method, $action)
{
	echo"<form name='$name' method='$method' action='$action'>";
}

function stopform($submit_name)
{
	echo"<input type='submit' value='$submit_name' name='submit'></form>";
}

function cal_head()
{
	$head = "<script language='JavaScript' src='calendar_us.js'></script><link rel='stylesheet' href='calendar.css'>";
	return $head;
}

function livesearch_head($page)
{
	$head = "<script type='text/javascript'>
function showResult(str)
{
if (str.length==0)
  { 
  document.getElementById('livesearch').innerHTML='';
  document.getElementById('livesearch').style.border='0px';
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById('livesearch').innerHTML=xmlhttp.responseText;
    document.getElementById('livesearch').style.border='1px solid #A5ACB2';
    }
  }
xmlhttp.open('GET','$page?q='+str,true);
xmlhttp.send();
}
</script>";
	return $head;
}

function livesearch($name)
{
	echo"$name: <form><input type='text' size='30' onkeyup='showResult(this.value)' /><div id='livesearch'></div></form>";
}

function radio($name, $options, $values, $checked)
{
	foreach ($options as $key => $v1)
	{
		Echo $options[$key] . "<input type='radio' name='$name' value='".$values[$key]."'";
		if ($checked == $values[$key])
		{
			echo"CHECKED";
		}
		echo"/>";
	}
	echo "<br />";
}

function hidden($name,$value)
{
	Echo "<input type='hidden' name='$name' value='$value' /> <br />";
}

function select($display, $name, $query, $col, $vcol, $selected, $multiple)
{
    Echo $multiple == 1 ? "$display: <select multiple name='".$name."[]'>" : "$display: <select name='$name'>";
	
	foreach ($row=myq($query) as $key => $value) 
	{
		echo"<option value='".$row[$key][$vcol]."'"; 
		
		if ($multiple == 1 )
		{
			Echo in_array($row[$key][$vcol],$selected) ? "selected='selected'" : "";
		}
		else
		{
			Echo $row[$key][$vcol]==$selected ? "selected='selected'" : "";
		}
		echo">".$row[$key][$col]."</option>";
	}
	Echo "</select> <br />";
}
function select_no($display, $name, $query, $col, $vcol, $selected, $multiple)
{
    Echo $multiple == 1 ? "$display <select multiple name='".$name."[]'>" : "$display: <select name='$name'>";
	
	foreach ($row=myq($query) as $key => $value) 
	{
		echo"<option value='".$row[$key][$vcol]."'"; 
		
		if ($multiple == 1 )
		{
			Echo in_array($row[$key][$vcol],$selected) ? "selected='selected'" : "";
		}
		else
		{
			Echo $row[$key][$vcol]==$selected ? "selected='selected'" : "";
		}
		echo">".$row[$key][$col]."</option>";
	}
	Echo "</select> <br />";
}
?> 