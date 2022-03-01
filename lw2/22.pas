PROGRAM SarahRever(INPUT, OUTPUT);
USES
  Dos;
CONST
  QueryVariableName = 'lanterns'
VAR
  Query: STRING;
BEGIN {SarahRever}
  WRITELN('Content_Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  
  IF Query = (QueryVariableName + '=1')
  THEN
    WRITELN('British are coming by land')
  ELSE
    IF Query = (QueryVariableName +'=2')
    THEN
      WRITELN('British are coming by sea')
    ELSE
      WRITELN('Sarah did not say')
END. {SarahRever}