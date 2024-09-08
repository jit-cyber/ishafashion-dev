@echo off
setlocal enabledelayedexpansion

set "letters=ABCDEFGHIJKLMNOPQRSTUVWXYZ"
set "index=0"

for %%f in ("garment (*.webp") do (
    set "currentLetter=!letters:~%index%,1!"
    ren "%%f" "temp!index!.webp"
    set /a index+=1
)

set "index=0"

for %%f in (temp*.webp) do (
    set "currentLetter=!letters:~%index%,1!"
    ren "%%f" "garment!currentLetter!.webp"
    set /a index+=1
)

endlocal
pause
