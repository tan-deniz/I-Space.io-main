<?php
class Post
{
    private $error = "";
    public function create_post($userid,$data)
    {
        if (!empty($data['post'])) 
        {
            $post = addslashes($data['post']);
            $postid = $this->create_postid();

            $query = "insert into posts (userid,postid,post) values ('$userid','$postid','$post')";
            $DB = new Database();
            $DB->save($query);

        }
        else 
        {
            $this->error .= "Please type something to post!<br>";
        }
        return $this->error;
    }

    public function get_posts($id)
    {
        $query = "select * from posts where userid = '$id' order by id desc limit 10";
        
        $DB = new Database();
        $result = $DB->read($query);

        if ($result) {
            return $result;

        }
        else
        {
            return false;
        }
    }

    private function create_postid()
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
}

?>