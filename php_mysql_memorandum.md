To check either strict mode is enabled for mysql:
`SHOW VARIABLES LIKE 'sql_mode';`

If `STRICT_TRANS_TABLES` appears, then strict mode is active.

Otherwise, to enable it, type:
`set global sql_mode='STRICT_TRANS_TABLES;`

To disable the strict mode, run:
`set global sql_mode='';`

* To make the changes permanent, edit the configuration mysql's file:
in /etc/mysql/mysql.conf.d/mysqld.cnf
* in the sub-section [mysqld], add:
`sql_mode='STRICT_TRANS_TABLES'`

**Type declarations** are available only for function arguments, return values and class properties.