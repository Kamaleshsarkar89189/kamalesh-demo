#include <stdio.h>
#include <conio.h>
#include <windows.h>

#define ENTER 13
#define TAB 9
#define BCKSPC 8

struct user {
    char fullName[50];
    char email[50];
    char username[50];
    char phone[12];
    char password[50];
};

void takeinput(char ch[50]) {
    fgets(ch, 50, stdin);
    ch[strlen(ch) - 1] = '\0';
}

void takepassword(char pwd[50]) {
    int i = 0;
    char ch;
    while (1) {
        ch = getch();
        if (ch == ENTER || ch == TAB) {
            pwd[i] = '\0';
            break;
        } else if (ch == BCKSPC) {
            if (i > 0) {
                i--;
                printf("\b \b");
            }
        } else {
            pwd[i++] = ch;
            printf("* \b");
        }
    }
}

void generateUsername(char email[50], char username[50]) {
    for (int i = 0; i < strlen(email); i++) {
        if (email[i] == '@') {
            break;
        } else {
            username[i] = email[i];
        }
    }
}

int main() {
    system("color 0b");
    FILE* fp;

    int opt, usrFound = 0;
    struct user user;
    char password2[50];

    char username[50], pword[50];

    printf("\n\t\t\t------------Welcome to authentication system----------");
    printf("\nPlease choose your operation");
    printf("\n1. Signup");
    printf("\n2. Login");
    printf("\n3. Exit");

    printf("\nYour choice:\t");
    scanf("%d", &opt);
    getchar(); // Consume the newline character

    switch (opt) {
        case 1:
            printf("\nEnter Your full name:\t");
            takeinput(user.fullName);
            printf("Enter your email:\t");
            takeinput(user.email);
            printf("Enter your contact number:\t");
            takeinput(user.phone);
            printf("Enter your password:\t");
            takepassword(user.password);
            printf("\nConfirm your password:\t");
            takepassword(password2);

            if (!strcmp(user.password, password2)) {
                generateUsername(user.email, user.username);

                fp = fopen("Users.dat", "a+");
                fwrite(&user, sizeof(struct user), 1, fp);
                if (fwrite != 0)
                    printf("\n\nUser registration success, Your user name is %s", user.username);
                else
                    printf("\n\nSorry! Something went wrong:(");
                fclose(fp);
            } else {
                printf("\n\nPassword don't match");
                Beep(500, 400);
                Sleep(100);
            }
            break;

        case 2:
            
            // struct user user;

            printf("\nEnter your username:\t");
            takeinput(username);
            printf("\nEnter your password:\t");
            takepassword(pword);

            fp = fopen("Users.dat", "r");
            while (fread(&user, sizeof(struct user), 1, fp)) {
                if (strcmp(user.username, username)) {
                    if (strcmp(user.password, pword)) {
                        printf("\n\t\t\t\tWelcome %s", user.fullName);
                        printf("\n\n|Full Name:\t%s", user.fullName);
                        printf("\n|Email:\t\t%s", user.email);
                        printf("\n|Username:\t%s", user.username);
                        printf("\n|Contactno:\t%s", user.phone);
                    } else {
                        printf("\nInvalid Password!");
                        Beep(5000, 900);
                        Sleep(100);
                    }
                    usrFound = 1;
                    break;
                }
            }

            if (!usrFound) {
                printf("\nUser is not registered!");
                Beep(5000, 900);
                Sleep(100);
            }
            fclose(fp);
            break;

        case 3:
            printf("\nExiting the program. Bye Bye!\n");
            break;

        default:
            printf("\nInvalid option!\n");
            break;
    }

    return 0;
}
