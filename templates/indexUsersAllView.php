<?php
//include_once __DIR__.'../App/User.php';
echo '<h2>отображение всех зарегистрированных пользователей</h2>';
//передаем в $userData массив $user
/**
 * @param $arrAllUsers
 */
function PokazVsehUsers($arrAllUsers)
{
    if (isset($arrAllUsers) && null !== $arrAllUsers) {
       // if(typeof( $usersAllData)== Users::class )
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
    </thead><tbody>';
        foreach ($arrAllUsers as  $user) {
            echo '<tr>';
            echo '<td>' . $user->getId() . '</td><td>' . $user->getName() . '</td><td>' . $user->getEmail() . '</td><td>' . $user->getLogin() . '</td><td>' . $user->getPassword() . '</td><td>' . $user->getIdRole() . '</td><td>' . $user->getDateReg() . '</td><td>' . $user->geDateLastVisit() . '</td><td>' . $user->getIpLastVisit() . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
}

?>
