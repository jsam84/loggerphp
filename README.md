PHP Log System README! Version 1
To install, download and place the files into the directory of the site you would like to use it in. Then to Use include in your php header require\_once() and either Log.php or both Log.php and XML\_Log.php.

The Log class provides a Log object for writing log files with the name of the file you are using it from. There is however a name override function provided. The Log object takes two arguments the first is the current working directory and the second is the name of the calling code (ie the function or file name). The Log class has a Write() function which takes string to be written as an argument; Also the Log class has a SU\_Write() function that takes a string as its argument and does the complete job of opening, writting, and closing the file in contrast to the Write() function only writes to the file and the file must be opened and closed with the seperate functions that are included in the class.

The Log\_XML class extends the Log class with three overloaded functions Open(), Write(), and Su\_Write(). The Open() function is overloaded to provide the proper xml header lines if the file is created on open. Both the Write() and Su\_Write functions are overloaded to take two arguments the error id and the log message to be written. The Write() function is further overloaded to write the file in XML format to the specification of Log.xsd.

Further improvements will be made as the need arises and if you make any improvements please send them back to me to be included.