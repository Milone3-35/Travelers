#include <stdio.h>
#include <conio.h>
#include <windows.h>

int main() {
    int ch = _getch();  // liest erstes Zeichen

    if (ch == 0 || ch == 224) {
        // Sondertaste (Pfeile, F-Tasten, etc.)
        ch = _getch();
        switch (ch) {
            case 72: printf("UpArrow\n"); break;
            case 80: printf("DownArrow\n"); break;
            case 75: printf("LeftArrow\n"); break;
            case 77: printf("RightArrow\n"); break;
            case 71: printf("Home\n"); break;
            case 79: printf("End\n"); break;
            case 73: printf("PageUp\n"); break;
            case 81: printf("PageDown\n"); break;
            case 82: printf("Insert\n"); break;
            case 83: printf("Delete\n"); break;
            default: printf("Unknown\n"); break;
        }
    } else {
        // Normale Taste
        switch (ch) {
            case 27: printf("Escape\n"); break;
            case 13: printf("Enter\n"); break;
            case 32: printf("Spacebar\n"); break;
            default:
                if (ch >= 'A' && ch <= 'Z')
                    printf("%c\n", ch);
                else if (ch >= 'a' && ch <= 'z')
                    printf("%c\n", ch - 32);  // in Großbuchstaben
                else
                    printf("KeyCode_%d\n", ch);
                break;
        }
    }

    return 0;
}
