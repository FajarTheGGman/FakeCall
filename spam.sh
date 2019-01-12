#!/bin/sh
clear;
dick() {
wget -O mamang.tmp "https://0x.nakocoders.org/rest-api/lain-nya/api.php?nomor=$no" 2>/dev/null
if [[ $(cat mamang.tmp) ]];
then
jq=$(cat mamang.tmp | jq -r .msg)
echo "$jq"
fi
}

echo " ̿ ̿'̿'\̵͇̿̿\з=(•_•)=ε/̵͇̿̿/'̿'̿ ̿ "
echo "[==============================]"
echo "Coder : Fajar Firdaus"
echo "FB : Fajar Firdaus \ Ace.Of.spades729"
echo "YT : iTech7732"
echo "iG : fajar_firdaus_7"
echo "[==============================]"

read -p "Masukan Nomor yang mau di spam : " no
dick $no
