#include<stdio.h>
#include<string.h>
#include<stdlib.h>

struct items{
    char item[20];
    float price;
    int qty;
};

struct orders{
    char customer[50];
    char date[50];
    int numOfItems;
    struct items itm[50];
};

void generateBillHeader(char name[50],char date[30])
{
    printf("\n\n");
    printf("\t   ADV. Restaurent");
    printf("\n\t  ------------------");
    printf("\nData:%s",date);
    printf("\nInvoice To: %s",name);
    printf("\n");
    printf("-------------------------------\n");
    printf("Items\t\t");
    printf("Qty\t\t");
    printf("Total\t\t");
    printf("\n-----------------------------");
    printf("\n\n");
}
void generateBillBody(char item[30],int qty, float price)
{
    printf("%s\t\t",item);
    printf("%d\t\t", qty);
    printf("%.2f\t\t",qty * price);
    printf("\n");
}


void generateBillFooter(float total)
{
    printf("\n");
    float dis = 0.1*total;
    float netTotal=total-dis;
    float cgst=0.09*netTotal,grandTotal=netTotal + 2*cgst;
    printf("---------------------------------\n");
    printf("Sub Total\t\t\t%.2f",total);
    printf("\nDiscount @10%s\t\t\t%.2f","%",cgst);
    printf("\n\t\t\t\t-------");
    printf("\nNet Total\t\t\t%.2f",netTotal);
    printf("\nCGST @9%s\t\t\t%.2f","%",cgst);
    printf("\nSGST @9%s\t\t\t%.2f","%",cgst);
    printf("\n---------------------------------");
    printf("\nGrand Total\t\t\t%.2f",grandTotal);
    printf("\n---------------------------------\n");
}
#include<stdio.h>

int main(){
    float total;
    int opt,n;
    struct orders ord;
    struct orders order;
    char saveBill = 'y',contFlag='y';
    char name[50];
    FILE *fp;
    //dashboad
    while(contFlag == 'y'){
        float total = 0;
        int invoiceFound = 0;
    printf("\t===========ADV. RESTAURANT=========");
    printf("\n\nPlease select your prefred operation:");
    printf("\n\n1. Generate Invoice");
    printf("\n2. Show all Invoice");
    printf("\n3. Search Invoice");
    printf("\n4. Exit");
    printf("\nYour choise:");

    // printf("\n");
    scanf("%d", &opt);
    fgetc(stdin);
    switch(opt){
        case 1:
        // system("clear");
        printf("\nPlease enter the name of the customer: \t");
        fgets(ord.customer,50,stdin);
        ord.customer[strlen(ord.customer)-1] = 0;
        strcpy(ord.date,"Nov 21 2023");
        printf("\nPlease enter the number of items:\t");
        scanf("%d",&n);
        ord.numOfItems = n;

        for(int i=0;i<n;i++){
            fgetc(stdin);
            printf("\nPlease enter  the item %d: ",i+1);
            fgets(ord.itm[i].item,20,stdin);
            ord.itm[i].item[strlen(ord.itm[i].item)-1]=0;
            printf("\nPlease enter the quantity:\t");
            scanf("%d", &ord.itm[i].qty);
            printf("\nPlease enter the unit price:\t");
            scanf("%f",&ord.itm[i].price);
            total += ord.itm[i].qty * ord.itm[i].price;
        }

        generateBillHeader(ord.customer,ord.date);
        for(int i=0;i<ord.numOfItems;i++){
            generateBillBody(ord.itm[i].item,ord.itm[i].qty,ord.itm[i].price);
        }
        generateBillFooter(total);

        printf("\nDo you want to save the invoice[y/n] \t");
        scanf("%s", &saveBill);

        if(saveBill == 'y'){
            fp = fopen("RestaurantBill.dat", "a+");
            fwrite(&ord,sizeof (struct orders),1,fp);
            if(fwrite != 0)
            printf("\nSuccessfully saved\t");
             else
             printf("\nError saving");
            fclose(fp);
        }
        break;

        case 2:
        fp = fopen("RestaurantBill.dat","r");
        printf("\n*****Your Previous Invoices*****\n");
        while(fread(&order,sizeof(struct orders),1,fp)){
            float tot = 0;
            generateBillHeader(order.customer,order.date);
            for(int i=0;i<order.numOfItems;i++){
                generateBillBody(order.itm[i].item,order.itm[i].qty,order.itm[i].price);
                tot+=order.itm[i].qty * order.itm[i].price;
            }
            generateBillFooter(tot);

        }
        fclose(fp);
        break;
        case 3:
        printf("\nEnter the name of the customer:\t");
        // fgetc(stdin);
        fgets(name,50,stdin);
        fp = fopen("Restaurant.dat","r");
        printf("\n\t*****Invoices of %s*****",name);
        while(fread(&order,sizeof(struct orders),1,fp)){
            float tot = 0;
            if(!strcmp(order.customer,name)){
            generateBillHeader(order.customer,order.date);
            for(int i=0;i<order.numOfItems;i++){
                generateBillBody(order.itm[i].item,order.itm[i].qty,order.itm[i].price);
                tot+=order.itm[i].qty * order.itm[i].price;
            }
            generateBillFooter(tot);
            invoiceFound = 1;  
            }
            

        }
        if(!invoiceFound){
           printf("Sorry the invoice for %s doesnot exists",name); 
        }
        fclose(fp);
        break;
        
        case 4:
        printf("Bey Bey :)\n\n");
        exit(0);
        break;

        default:
        printf("Sorry invalid option");
        break;
        
    }
    printf("\nDo you want to perform another operation?[y/n]:\t");
    scanf("%s",&contFlag);
    }
    printf("\n\n");
  
    return 0;
}