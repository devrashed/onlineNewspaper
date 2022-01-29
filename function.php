<?php
function pagination($page,$nrow,$link,$perpa){		
		$t=ceil( $nrow/$perpa);
		if($t>1){
				if($t<=10){
				   $start=1;
				   $end=$t;
				}elseif($page<=5){
				   $start=1;
				   $end=10;
				}elseif($t-$page>=5 and $page>5){
				   $end=$page+5;
				   $start=$end-9;
				}elseif($t-$page<5){
				   $end=$t;
				   $start=$end-9;
				}
				if($page==1){
				  for($i=$start;$i<=$end;$i++)
					 if($i==$page) echo "<b>".$i."</b>&nbsp;";
						else echo "<a href='".$link."page=$i'>".$i."</a>&nbsp;";
						echo"<a href='".$link."page=".($page+1)."' >[পরে]</a>";
				}elseif($page==$t){
				  echo"<a href='".$link."page=".($page-1)."'>[আগে]</a>&nbsp;";
				  for($i=$start;$i<=$end;$i++)
					 if($i==$page) echo "<b >".$i."</b>&nbsp;";
					 else echo "<a href='".$link."page=$i'>".$i."</a>&nbsp;";
				}else{
				  echo"<a href='".$link."page=".($page-1)."' >[আগে]</a>&nbsp;";
				  for($i=$start;$i<=$end;$i++)
					 if($i==$page) echo "<b>".$i."</b>&nbsp;";
					 else echo "<a href='".$link."page=$i'>".$i."</a>&nbsp;";
				  echo"<a href='".$link."page=".($page+1)."'>[পরে]</a>";
				}
		}else  echo"&nbsp;";

}

?>