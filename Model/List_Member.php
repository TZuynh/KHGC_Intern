<?php
    class List_Member
    {
        private $ListMember = [
            [
                "id" => 1,
                "fullname" => "Quỳnh 1",
                "email" => "nguyentuanquynh101203@gmail.com",
                "phone" => "0866924229",
                "local" => "Q3, TPHCM",
            ],
            [
                "id" => 2,
                "fullname" => "Quỳnh 2",
                "email" => "nguyentuanquynh101203@gmail.com",
                "phone" => "0866924229",
                "local" => "Q3, TPHCM",
            ],
            [
                "id" => 3,
                "fullname" => "Quỳnh 3",
                "email" => "nguyentuanquynh101203@gmail.com",
                "phone" => "0866924229",
                "local" => "Q3, TPHCM",
            ],
        ];
        public function getAllMembers()
        {
            return $this->ListMember;
        }
        public function getMember($id)
        {
            if(count($this->ListMember) == 0) {
                return false;
            }
            else
            {
                for($i = 0; $i < count($this->ListMember); $i++) 
                {
                    if($this->ListMember[$i]["id"] == $id) 
                    {
                        return $this->ListMember[$i];
                    }
                }
                return false;
            }
        }
    }
?>