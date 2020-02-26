<?php 
Installing error reading from database during install Moodle 2.9.2
https://moodle.org/mod/forum/discuss.php?d=325645

Basically in /lib/dml/mysqli_native_moodle_database.php, you need to change "$sql = "SELECT @@storage_engine";" to "$sql = "SELECT @@default_storage_engine";". (Note the addition of "default_")

https://tracker.moodle.org/browse/MDL-50633
