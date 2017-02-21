<?php
echo '<h2>отображение зарегистрированного пользователя</h2>';
//передаем в $userData массив $user
if(isset($userData)&& null!== $userData){
        echo '<table class="table"><thead>
    <tr>
    <td>id</td>
    <td>name</td>
    <td>email</td>
    <td>login</td>
    <td>password</td>
    <td>id_role</td>
    <td>date registration</td>
    <td>date last visit</td>
    <td>ip last visit</td>
    </tr>
    </thead><tbody><tr>';
            echo '<td>'.$userData[0][0].'</td>';
            echo '<td>'.$userData[0][1].'</td>';
            echo '<td>'.$userData[0][2].'</td>';
            echo '<td>'.$userData[0][3].'</td>';
            echo '<td>'.$userData[0][4].'</td>';
            echo '<td>'.$userData[0][5].'</td>';
            echo '<td>'.$userData[0][6].'</td>';
            echo '<td>'.$userData[0][7].'</td>';
            echo '<td>'.$userData[0][8].'</td>';
        echo '</tr></tbody>
    </table>';
}
?>

