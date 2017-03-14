<?php

function get_all_hours($name) {
    global $db;
    $address = array();
    try {
        $query = 'Select Users.Name, Volunteer_Hour.hours, Volunteer_Hour.time,
    Volunteer_Hour.date, Volunteer_Hour.L_or_F, Volunteer_Hour.ifLoggedIn, 
    Volunteer_Hour.description from Users inner join Volunteer_Hour on 
    Users.idUsers=Volunteer_Hour.user_id where Users.Name= :name';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->execute();
       // $address = $statement->fetch();
        while($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
           $address[] = $row;
        }
        $statement->closeCursor();
        return $address; //array?????!!!!
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function add_hour($name, $hours, $time, $date, $hour_type, $if_logged_in, $description) {
    global $db;

    try {
        $query = 'insert into Users (Name) values (:name)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->execute();
        $statement->closeCursor();
        $name_id = $db->lastInsertId();

        $query = 'insert into Volunteer_Hour (user_id, hours, time,
        date, L_or_F, ifLoggedIn, description) values (:name_id, :hours, :time,
        :date, :hour_type, :if_logged_in, :description)';

        $statement = $db->prepare($query);
        $statement->bindValue(':name_id', $name_id);
        $statement->bindValue(':hours', $hours);
        $statement->bindValue(':time', $time);
        $statement->bindValue(':date', $date);
        $statement->bindValue(':hour_type', $hour_type);
        $statement->bindValue(':if_logged_in', $if_logged_in);
        $statement->bindValue(':description', $description);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
     }
}
?>