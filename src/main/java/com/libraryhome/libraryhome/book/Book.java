package com.libraryhome.libraryhome.book;
import jakarta.persistence.*;
import lombok.Getter;
import lombok.Setter;

import java.io.Serializable;

@Entity(name = "books")
@Getter
@Setter
public class Book implements Serializable {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id", nullable = false)
    private Long id;
    private String title;
    private String author;
    private String category;
    private String publisher;
    @Enumerated(EnumType.STRING)
    private Status status;

}
