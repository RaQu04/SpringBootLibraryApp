package com.libraryhome.libraryhome.book;

import com.libraryhome.libraryhome.book.Book;
import com.libraryhome.libraryhome.book.UserNotFoundException;
import com.libraryhome.libraryhome.book.BookRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.UUID;

@Service
public class BookService {
    private final BookRepository bookRepository;

    @Autowired
    public BookService(BookRepository bookRepository) {
        this.bookRepository = bookRepository;
    }

    public Book addBook(Book book){
        book.setBookNumber(UUID.randomUUID().toString());
        return bookRepository.save(book);
    }

    public List<Book> findAllBooks(){
        return bookRepository.findAll();
    }

    public Book updateBook(Book book){
        return bookRepository.save(book);
    }

    public Book findBookById(Long id){
        return bookRepository.findBookById(id)
                .orElseThrow(() -> new UserNotFoundException("User by id: " + id + "was not found"));
    }

    public void deleteBook(Long id){
        bookRepository.deleteBookById(id);
    }
}
