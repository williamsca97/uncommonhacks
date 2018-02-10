#include <unistd.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>




int main(int argc, char *argv[])
{
    if(argc <= 1)
    {
        return 0; 
    }

    char *filename = argv[1];
    FILE *fp = fopen(filename, "r"  );
    
    char buffer[1024]; // Buffer for storing line by line information. Probably smarter to make this smaller and overwrite it every pass, instead storing the information directly in whatever format we need immediately

    while(fgets(buffer, sizeof(buffer), fp) != NULL)
    {
        puts(buffer);
        printf("Buffer: %s\n");
    }
    
    fclose(fp);
    


    
}