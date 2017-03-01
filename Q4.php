<?php
$maze = array
  (
  array(0, 0, 0, 0),
  array(0, -1, 0, 0),
  array(-1, 0, 0, 0),
  array(0, 0, 0, 0)
  );

function countPaths($maze)
{
    if ($maze[0][0]==-1)
        return 0;
 
    for ($i=0; $i<3; $i++)
    {
        if ($maze[$i][0] == 0)
            $maze[$i][0] = 1;
 
        else
            break;
    }
 
        for ($i=1; $i<3; $i++)
    {
        if ($maze[0][$i] == 0)
            $maze[0][$i] = 1;
 
        else
            break;
    }
    for ($i=1; $i<3; $i++)
    {
        for ($j=1; $j<3; $j++)
        {
                
            if ($maze[$i-1][$j] > 0)
                $maze[$i][$j] = ($maze[$i][$j] + $maze[$i-1][$j]);
            if ($maze[$i][$j-1] > 0)
                $maze[$i][$j] = ($maze[$i][$j] + $maze[$i][$j-1]);
            if ($maze[$i][$j] == -1)
                continue;
        }
    }
 
    return ($maze[2][2]);
}


$z= countPaths($maze);
echo "Total number of paths :" .$z;    

?>
