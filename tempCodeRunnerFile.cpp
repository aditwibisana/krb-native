#include <iostream>
#include <conio.h>
using namespace std;
int main()
  {
    char predikat;
    float ipk;
    int masa_studi;
    cout<<"Masukan IPK : ";
    cin>>ipk;
    cout<<"Masukan Lama kuliah : ";
    cin>>ipk;
    if(ipk > 3.5){
        if(masa_studi <=4){
            cout<<"Predikat anda adalah PUJIAN";
        }
        else{
            cout<<"Predikat anda adalah SANGAT MEMUASKAN";
        }

    }


  return 0;
  }