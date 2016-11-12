# Log library for phpfox framework. 

Implement http://www.php-fig.org/psr/psr-3/

https://tools.ietf.org/html/rfc3164

```
Code    Level      Meaning
0       Emergency  system is unusable
1       Alert      action must be taken immediately
2       Critical   critical conditions
3       Error      error conditions
4       Warning    warning conditions
5       Notice     normal but significant condition
6       Info       informational messages
7       Debug      Debug-level messages
```


### Concepts
- Log Formater is a driver to format message in various way.  
- Log Writer is a driver to write log message to difference target. 
- Log Manager is a container of "Writer", any invoke to Container will affected to all 

__Example__

```php
$logManager->add(new FilesystemWriter([...]));
$logManager->add(new DatabaseWriter([...]));

$logManager->debug('system unnable');

//result: write to database & file system
```
