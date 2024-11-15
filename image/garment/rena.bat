@echo off
setlocal enabledelayedexpansion

set "letters=ABCDEFGHIJKLMNOPQRSTUVWXYZ"

set "index=0"

:: Second pass to rename temp files to final naming scheme
for %%f in (temp*.webp) do (
    set "currentLetter=!letters:~%index%,1!"
    ren "%%f" "garment!index!.webp"
    set /a index+=1
)

endlocal
pause
