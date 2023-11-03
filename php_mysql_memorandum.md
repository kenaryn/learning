To check either strict mode is enabled for mysql:
`sudo mysql`
`SHOW VARIABLES LIKE 'sql_mode';`

If `STRICT_TRANS_TABLES` appears, then strict mode is active.

Otherwise, to enable it, type:
`set global sql_mode='STRICT_TRANS_TABLES;`

To disable the strict mode, run:
`set global sql_mode='';`

* To make the changes permanent, edit the mysql's configuration file:
in /etc/mysql/mysql.conf.d/mysqld.cnf
* Below the sub-section [mysqld], add the following:
`sql_mode='STRICT_TRANS_TABLES'`

**Type declarations** are available only for function arguments, return values and class properties.

Passing arguments with GET
==========================

Adding a link <a href="./path/to/target.php?param1=<?=$_GET['param1']?>&param2=<?=$_GET['param2']?>">Link name</a>