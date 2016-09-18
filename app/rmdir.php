<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rmdir 
{
   	public function rmdir_recursive($dir) 
    {
        foreach(scandir($dir) as $file) 
        {
            if ('.' === $file || '..' === $file) continue;
            if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
            else unlink("$dir/$file");
        }
        rmdir($dir);

        return 'booth deleted';
    }
}
