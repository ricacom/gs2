<?php

include realpath(dirname(__FILE__)) . '/assets/inc/init.php';

class UsLogin extends fActiveRecord
{
    protected function configure()
    {
        // Configure the extra feature and overrides using the supporting ORM classes
    }
}

fORMDatabase::attach($gsdb);

///------------------ We're go -----------

//$users = fRecordSet::buildFromSQL('UsLogin');
$users = fRecordSet::build('UsLogin');

//$records = $users->getRecords();
foreach ($users as $u ) {
	echo $u->getEmail();
	echo "<br>";	
}


/*

	try {
			$users = new UsLogin();
			$user_id = fRequest::get('user_id');
			$users   = SetCreator::findUsers();
			
			foreach ($users as $user) {
			    ?>
			    <tr class="<?php echo fCRUD::getRowClass($user->getUserId(), $user_id) ?>">
			        <td><?php echo $user->getName() ?></td>
			        <td><?php echo $user->getEmail() ?></td>
			    </tr>
		<?php
			}	
	
	} catch (fExpectedException $e) {
	    echo $e->printMessage();
	}
*/