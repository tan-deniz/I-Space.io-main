<?php

 class USER
{
    public function get_data($id)
    {

        $query = "select * from users where userid = '$id' limit 1";
        $DB = new Database();
        $result = $DB->read($query);

        if($result)
        {
            $row = $result[0];
            return $row;
        }else
        {
            return false;
        }
    }

    private function create_userid()
    {
        $length = rand(4,19);
        $number = "";
        for ($i=1; $i < $length ; $i++)
        { 
            # code...
            $new_rand = rand(0,9);

            $number = $number . $new_rand = rand(0,9);
        }
        return $number = $number . $new_rand = rand(0,9);
    }
    
    public function get_user($id)
    {
        $query = "select * from users where userid = '$id' limit 1";
        $DB = new Database();
        $result = $DB->read($query);

        if ($result)
        {
            return $result[0];

        }
        else
        {
            return false;    
        }

    }

}

?>