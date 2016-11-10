tx.exe pull -a -skip


for %%a in (*.po) do (
   if /i not "%%~na"=="en" (
		::msgfmt -c -v -o "%%~na.mo" "%%a"
        MOVE "%%~na.mo" "mo"		
        MOVE "%%~na.po" "po"		
    )
)


::for %%a in (*.mo) do (

  ::if %%~za LSS 2000 (
	 ::del "%%a"
  ::)
	
::)
PAUSE