<?php
    include("../Model/List_Member.php");
    class MemberController 
    {
        public static function getAllMembers()
        {
            $members = new List_Member();
            return $members->getAllMembers();
        }
        public static function getMember($id)
        {
            $member = new List_Member();
            return $member->getMember($id);
        }
    }
?>