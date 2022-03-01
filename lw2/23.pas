PROGRAM PrintGreeting(INPUT, OUTPUT);
USES
  Dos;
VAR
  Query, Name1, NameVar: STRING;
  NameLength, P: INTEGER;
BEGIN {PrintGreeting}
  WRITELN('Content_Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  NameVar := 'name=';
  P := POS(NameVar, Query);
  Name1 :='';
  IF P = 1
  THEN
    BEGIN
      IF POS('&', Query) > 0
      THEN
        NameLength := POS('&', Query) - LENGTH(NameVar) - 1
      ELSE
        NameLength := LENGTH(Query) - LENGTH(NameVar) ;
      Name1 := COPY(Query, P + LENGTH(Namevar), NameLength);
      IF Name1 = ''
      THEN
        WRITELN('Hello Anonymous!')
      ELSE
        WRITELN('Hello dear, ', Name1, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!')
END. {PrintGreeting}
