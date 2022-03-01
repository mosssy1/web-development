PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  Query, Answer: STRING;
  Position: INTEGER;
BEGIN
  Query := GetEnv('QUERY_STRING');
  Position := POS(Key, Query);
  Position := Position + Length(Key) + 1;
  Answer := '';
  WHILE (Position <= Length(Query)) AND (Query[Position] <> '&')
  DO
    BEGIN
      Answer := Answer + Query[Position];
      Position := Position + 1;
    END;
  GetQueryStringParameter := Answer
END;

BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}
